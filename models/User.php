<?php

class user {

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $admin;
    private $password;
    
    public function __construct($id, $firstName, $lastName, $email, $phone, $admin, $password) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->admin = $admin;
        $this->password = $password;
    }
    public function getUserById($id) {
        // Code to retrieve user from database by ID
        $user = User::find($id);
        return $user;
    }
}