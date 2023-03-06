<?php

namespace App\Services\Interfaces;

/**
 * App\UseCases;
 */


interface SecurityHubServiceInterface
{
    /**
     * DBに保存されたパスワードと一致しているか確認
     * @param string $hashPassword
     * @param string $confirmPassword
     * @return bool
     */
    public function passwordCheck(string $hashPassword, string $confirmPassword): bool;
}
