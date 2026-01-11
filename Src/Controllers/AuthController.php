<?php
namespace App\Controllers;

use App\Service\AuthService;
use App\Service\ClientService;
use App\Service\DeliveryService;
use App\Service\UserService;
use Exception;

class AuthController
{
    private ClientService $client;
    private DeliveryService $delivery;

    public function __construct(ClientService $clientService, DeliveryService $deliveryService)
    {
        $this->client = $clientService;
        $this->delivery = $deliveryService;
    }

    public function register($data)
    {
        if(!isset($data['submit']) || $data['submit'] !== 'register') header('location: ../register.php');

        if(strlen($data['firstname']) < 3 || strlen($data['lastname']) < 3) throw new Exception("firstname and lastname should be longer than 3 characters");
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) throw new Exception("Invalid email");
        if(strlen($data['password']) < 6) throw new Exception("Password too short");

        $hashedpassword = password_hash($data['password'], PASSWORD_BCRYPT);

        if($data['role'] == '2') $this->client->register($data, $hashedpassword);
    
        if($data['role'] == '3') $this->delivery->register($data, $hashedpassword);
    }
}