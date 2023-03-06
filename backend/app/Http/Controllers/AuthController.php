<?php

namespace App\Http\Controllers;

use App\UseCases\Interfaces\UserRegisterUseCaseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private UserRegisterUseCaseInterface $userRegisterUseCase;
    public function __construct(UserRegisterUseCaseInterface $userRegisterUseCase)
    {
        $this->userRegisterUseCase = $userRegisterUseCase;
    }

    /**
     * HTTP Requestごとに呼び出すUseCaseを変更する
     * @throws \Exception
     */
    public function switchHttpRequest(Request $request): JsonResponse
    {
        $httpMethod = $request->method();
        switch ($httpMethod){
            case "GET":
                $user = $this->userRegisterUseCase->handle($request);
                return response()->json($user);
            case "POST":
                $result = $this->userRegisterUseCase->handle($request);
                return response()->json(["result" => $result["result"]], $result["status"]);
            case "PUT":
//                $this->updateUserUseCase->handle($request);
                return response()->json(["message" => "更新できました。"]);
            case "DELETE":
//                $this->deleteUserUseCase->handle($request);
                return response()->json(["message" => "削除できました。"]);
        }
        return response()->json(["message" => "存在しません"], 302);
    }
}
