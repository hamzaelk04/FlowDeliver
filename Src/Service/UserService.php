<?php
namespace App\Service;

use App\Repository\ClientRepository;
use App\Repository\UserRepository;
class UserService
{
    private ClientRepository $client;
    private UserRepository $user;

    public function __construct(UserRepository $user, ClientRepository $client)
    {
        $this->user = $user;
        $this->client = $client;
    }

    public function register(
        $firstname,
        $lastname,
        $email,
        $password,
        $city,
        $role,
        $vehicule
    ) {
        
    }
}