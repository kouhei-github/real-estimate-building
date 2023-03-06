<?php

namespace App\UseCases\Interfaces;

use Illuminate\Http\Request;

/**
 * App\UseCases;
 */


interface LoginUseCaseInterface
{

    /**
     * ログイン機能を実装したUseCase
     * @param Request $request
     * @return array
     */
    public function handle(Request $request): array;
}
