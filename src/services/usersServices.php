<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\usersRepository;


class UsersServices {

    private usersRepository $repository;

    public function __construct(usersRepository $repository) {
        $this->repository = $repository;
    }

    public function getUserById(int $id): User {
        $user = $this->repository->findById($id);
        if (!$user) {
            throw new \Exception("User not found");
        }
        return $user;
    }

    public function getAllUsers(): array {
        return $this->repository->findAll();
    }

    public function authenticate(string $email, string $password): ?User{
        $user = $this->repository->findByEmail($email);

        if($user === null || !$user->verifyPassword($password)){
            return null;
        }
        return $user;
    }
}