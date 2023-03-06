<?php

namespace App\Http\Controllers;


use App\UseCases\Interfaces\LoginUseCaseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private LoginUseCaseInterface $loginUseCase;
    public function __construct(LoginUseCaseInterface $loginUseCase)
    {
        $this->loginUseCase = $loginUseCase;
    }

    /**
     * HTTP Requestごとに呼び出すUseCaseを変更する
     * @throws \Exception
     */
    public function switchHttpRequest(Request $request): JsonResponse
    {
        $result = $this->loginUseCase->handle($request);
        return response()->json(["result" => $result["result"]], $result["status"]);
    }
}
