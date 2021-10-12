<?php

class User
{
    protected string $username;
    protected string $email;
    public int $role = 1;
    const admin = 1;
    const user = 2;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }


    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRole(): int
    {
        return $this->role;
    }


    public function setRole(int $role): void
    {
        $this->role = $role;
    }


    public function getInfo(): string
    {
        return ($this->isAdmin() . " <br>" . " name : " . $this->username . "<br> " . " email : " . $this->email);
    }

    public function isAdmin()
    {
        if ($this->role === 1) {
            echo "Admin";
        } else if ($this->role === 2) {
            echo "nguoi dung binh thuong";
        }
    }
}

$user = new User("minh", "minh@gmail.com");
$user->setRole(1);
echo $user->getInfo();

