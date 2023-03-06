<?php

namespace App\UseCases;

use App\Domain\UserDomain;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\SecurityHubServiceInterface;
use App\UseCases\Interfaces\LoginUseCaseInterface;
use Illuminate\Http\Request;


class LoginUseCase implements LoginUseCaseInterface
{
    private UserRepositoryInterface     $userRepository;
    private SecurityHubServiceInterface $securityHubService;
    public function __construct(
        UserRepositoryInterface     $userRepository,
        SecurityHubServiceInterface $securityHubService
    ) {
        $this->userRepository     = $userRepository;
        $this->securityHubService = $securityHubService;
    }

    /**
     * ログイン機能を実装したUseCase
     * @param Request $request
     * @return array
     */
    public function handle(Request $request): array
    {
        $body       = $request->all();
        $userDomain = new UserDomain($body["name"], $body["email"], $body["password"]);
        $user       = $this->userRepository->findByEmail($userDomain);
        if(is_null($user)) {
            return ["status" => 202, "result" => "存在しないメールアドレスです。"];
        }
        $isCorrect  = $this->securityHubService->passwordCheck($user->password, $userDomain->getPassword());
        if(!$isCorrect){
            return ["status" => 202, "result" => "メールアドレスとパスワードが正しくありません。"];
        }
        return ["status" => 200, "result" => $user->createToken('auth_token')->plainTextToken];
    }
}
