<?php

namespace App\Repositories;

use App\Models\User;
use PDO;

class usersRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function findAll(): array{
        $query = $this->pdo->query('SELECT * FROM users ORDER BY id');
        $result = $query-> fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn(array $result) => 
        User::fromDatabaseRow($result), $result);
    }

    public function findById(int $id): ?User{
        $query = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result ? User::fromDatabaseRow($result) : null ;
    }

    public function findByEmail(string $email): ?User {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute(['email' => $email]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result ? User::fromDatabaseRow($result): null;
    }

    public function checkEmailExists(string $email): bool {
        $query = $this->pdo->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $query->execute(['email' => $email]);
        return (int) $query->fetchColumn() > 0;
    }
}