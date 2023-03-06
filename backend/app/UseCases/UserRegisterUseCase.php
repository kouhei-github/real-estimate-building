<?php

namespace App\UseCases;

use App\Domain\UserDomain;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\UseCases\Interfaces\UserRegisterUseCaseInterface;
use Illuminate\Http\Request;


class UserRegisterUseCase implements UserRegisterUseCaseInterface
{
    private UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 情報の登録
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function handle(Request $request): array
    {
        $body       = $request->all();
        $userDomain = new UserDomain($body["name"], $body["email"], $body["password"]);

        // Emailが存在しないか確認
        $user       = $this->userRepository->findByEmail($userDomain);
        if(!is_null($user)) {
            // 409 Conflict => すでに存在するメールアドレス
            return ["status" => 409, "result" => "既に存在しているEmailです"];
        }

        // Userの登録
        $token = $this->userRepository->save($userDomain);
        return ["status" => 201, "result" => $token];
    }
}
