<?php

namespace App\Repositories;

use App\Models\User;
use PDO;

class UserRepository{
    private PDO $userPdo;

    public function __construct(PDO $pdo){
        $this->userPdo = $pdo;
    }

    public function findAll(): array{
        $query = $this->pdo->prepare('SELECT * FROM users ORDER BY id');
        $query->execute();
        $result = $query-> fetch(PDO::FETCH_ASSOC);

        return $result ? User::fromDatabaseRow($result): null;
    }

    public function findById(int $id): ?User{
        $query = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result ? User::fromDatabaseRow($result) : null ;
    }

    public function findByEmail(string $email): ?User {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $query->exexcute(['email' => $email]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result ? User::fromDatabaseRow($result): null;
    }
}