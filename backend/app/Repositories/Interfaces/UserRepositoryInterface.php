<?php

namespace App\Repositories\Interfaces;

use App\Domain\UserDomain;
use App\Models\User;


interface UserRepositoryInterface
{
    /**
     * Emailを使用してUserを検索する
     * @param UserDomain $userDomain
     * @return User|null
     */
    public function findByEmail(UserDomain $userDomain): User|null;

    /**
     * Userの更新
     * @param UserDomain $userDomain
     * @return string
     */
    public function update(UserDomain $userDomain): string;

    /**
     * Userの新規作成
     * @param UserDomain $userDomain
     * @return string
     */
    public function save(UserDomain $userDomain): string;
}
