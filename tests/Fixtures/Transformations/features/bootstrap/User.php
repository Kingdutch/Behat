<?php

class User
{
    public function __construct(
        private string $username,
        private int $age = 20
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
