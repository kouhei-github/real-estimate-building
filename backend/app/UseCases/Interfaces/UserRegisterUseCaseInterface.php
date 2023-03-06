<?php

namespace App\UseCases\Interfaces;

use Illuminate\Http\Request;


interface UserRegisterUseCaseInterface
{
    /**
     * 情報の登録
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function handle(Request $request): array;
}
