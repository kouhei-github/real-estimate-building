<?php

namespace App\Repositories;

use App\Domain\UserDomain;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class UserRepository implements UserRepositoryInterface
{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Userの新規作成
     * @param UserDomain $userDomain
     * @return string
     */
    public function save(UserDomain $userDomain): string
    {
        $this->user->name     = $userDomain->getName();
        $this->user->password = \Hash::make($userDomain->getPassword());
        $this->user->email    = $userDomain->getEmail();
        $this->user->save();
        return $this->user->createToken('auth_token')->plainTextToken;
    }

    /**
     * Userの更新
     * @param UserDomain $userDomain
     * @return string
     */
    public function update(UserDomain $userDomain): string
    {
        $this->user->name     = $userDomain->getName();
        $this->user->password = \Hash::make($userDomain->getPassword());
        $this->user->email    = $userDomain->getEmail();
        $this->user->update();
        return $this->user->createToken('auth_token')->plainTextToken;
    }

    /**
     * Emailを使用してUserを検索する
     * @param UserDomain $userDomain
     * @return User|null
     */
    public function findByEmail(UserDomain $userDomain): User|null
    {
        return $this->user->Firstwhere("email", "=", $userDomain->getEmail());
    }
}
