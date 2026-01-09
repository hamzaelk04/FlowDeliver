<?php
namespace App\Controllers;

use App\Service\AuthService;
use App\Service\ClientService;
use App\Service\UserService;
use Exception;

class AuthController
{
    // private AuthService $user;
    private ClientService $client;
    private UserService $user;

    // public function __construct(AuthService $service)
    // {
    //     $this->user = $service;
    // }

    public function register($data)
    {
        if (!isset($data['submit']) || $data['submit'] !== 'register')
            header('location: ../register.php');
        $city = $data['city'];
        $role = $data['role'];
        $vehicule = $data['vehicule'];

        if(strlen($data['firstname']) < 3 || strlen($data['lastname']) < 3) throw new Exception("firstname and lastname should be longer than 3 characters");
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) throw new Exception("Invalid email");
        if (strlen($data['password']) < 6) throw new Exception("Password too short");
        // $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

        if ($data['role'] == '2') {
            
        }
        // if ($role === 'client')
        // {
        //     try {
        //         $this->client->register($firstname, $lastname, $email, $hashedpassword, $city, $role, $vehicule);
        //     } catch (Exception $th) {
        //         echo 'failed client register ' . $th;
        //     }
        // }
    }
}