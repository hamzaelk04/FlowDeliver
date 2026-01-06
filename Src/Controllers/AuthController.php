<?php
namespace App\Controllers;

use App\Service\AuthService;
use Exception;

class AuthController
{
    private AuthService $user;

    public function __construct(AuthService $service)
    {
        $this->user = $service;
    }

    public function register($data)
    {
        if (!isset($data['submit']) || $data['submit'] !== 'register')
            header('location: ../register.php');
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $password = $data['password'];
        $city = $data['city'];
        $role = $data['role'];
        $vehicule = null;

        if ($role === 'deliver')
            $vehicule = $data['vehicule'];

        try {
            $this->user->register($firstname, $lastname, $email, $password, $city, $role, $vehicule);
        } catch (Exception $th) {
            echo 'Error: ' . $th->getMessage();
        }
    }
}