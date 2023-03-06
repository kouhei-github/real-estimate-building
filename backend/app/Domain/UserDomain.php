<?php

namespace App\Domain;

class UserDomain
{
    private string $name;
    private string $email;
    private string $password;
    private string $jwtToken;

    /**
     * Userドメインを構成するコンストラクタ
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string $jwtToken
     * @throws \Exception
     */
    public function __construct(string $name, string $email, string $password, string $jwtToken="")
    {
        $this->name     = $name;
        $this->jwtToken = $jwtToken;
        if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
            throw new \Exception($email . " はメールアドレスの形式ではありません。");
        }
        $this->email    = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getJwtToken(): string
    {
        return $this->jwtToken;
    }

    /**
     * @param string $jwtToken
     */
    public function setJwtToken(string $jwtToken): void
    {
        $this->jwtToken = $jwtToken;
    }
}
