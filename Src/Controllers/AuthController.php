<?php
namespace App\Controllers;

use App\Service\AuthService;
use Exception;

class AuthController
{
    private AuthService $user;

    // public function __construct()
    // {
    //     $this->user = new User();
    // }

    public function register($data)
    {
        if ($data['submit' != 'register'])
            header('location: ../register.php');
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['Email'];
        $password = $data['Password'];
        $city = $data['City'];
        $role = $data['Role'];
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