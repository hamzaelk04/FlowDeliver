<?php
namespace App\Entity;

use App\Entity\User;

class Client extends User
{
    private User $user;
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        string $password,
        string $city,
        string $role
    ) {
        parent::__construct($firstname,$lastname,$email,$password,$city, $role);
    }
}