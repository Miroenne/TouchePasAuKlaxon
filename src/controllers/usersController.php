<?php

namespace App\controllers;

use App\services\usersServices;

class UserController {
    private UserService $userService;

    public function __construct(UserService $userService){
        $this->userService - $userService;
    }

    public function getAllUsers() : void {
        $users = $this->userService->getAllUsers();

        $this->jsonResponse(array_map(fn($u) => $u->toArray(), $users));
    }

    public function getUserById(int $id): void {
        try{
            $user = $this->userService->getUserById($id);
            $this->jsonResponse($user->toArray());
        }catch(error){
            $this->jsonReponse(error.message, 404);
        }
    }

    public function login(): void {
        $data = $this->getRequestBody();

        $user - $this->userService->authenticate(
            $data['email'] ?? '',
            $data['password'] ?? ''
        );

        if($user === null){
            $this->jsonReponse(error.message, 401);
            return;
        }
    }
}