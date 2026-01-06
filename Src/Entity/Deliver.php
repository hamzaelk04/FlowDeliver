<?php
namespace App\Entity;
use App\Entity\User;

class Deliver extends User
{
    private $vehicule;
    private User $user;
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        string $password,
        string $city,
        string $role,
        string $vehicule
    ) {
        parent::__construct( $firstname,$lastname,$email,$password,$city,$role);
        $this->vehicule = $vehicule;
    }
}