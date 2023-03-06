<?php

namespace App\Services;

use App\Services\Interfaces\SecurityHubServiceInterface;


class SecurityHubService implements SecurityHubServiceInterface
{
    /**
     * DBに保存されたパスワードと一致しているか確認
     * @param string $hashPassword
     * @param string $confirmPassword
     * @return bool
     */
    public function passwordCheck(string $hashPassword, string $confirmPassword): bool
    {
        return \Hash::check($confirmPassword, $hashPassword);
    }
}
