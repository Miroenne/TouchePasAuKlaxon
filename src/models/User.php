<?php

class user {

    private ?int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $phoneNumber;
    private int $admin;
    private string $password;
    
    public function __construct(?int $id, string $firstName, string $lastName, string $email, string $phoneNumber, int $admin, string $password) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->admin = $admin;
        $this->password = $password;
    }
    
    // -------- Getters ----

    public function getId() : ?int{
        return $this->id;
    }

    public  function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getFullName(): string {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    public function getAdmin(): int {
        return $this->admin;
    }

    public function getPassword(): string {
        return $this->password;
    }


    // -------- Setters -------

    public function setFirstName(string $firstName): void {
        $this->fisrtName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setPassword(string $password): void {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function setEmail(string $email):void {
        $this->email = $email;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->phoneNUmber = $phoneNumber;
    }

    public function setAdmin(int $admin): void {
        $this->admin = $admin;
    }


    // ------------ Methods --------

    public function verifyPassword(string $formPassword): bool {
        return password_verify($formPassword, $this->password);
    }

}