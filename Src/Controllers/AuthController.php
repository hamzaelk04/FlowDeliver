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

    public function register()
    {
        if ($_POST['submit' != 'register'])
            header('location: ../register.php');
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $city = $_POST['City'];
        $role = $_POST['Role'];
        $vehicule = null;

        if ($role === 'deliver')
            $vehicule = $_POST['vehicule'];

        try {
            $this->user->register($firstname, $lastname, $email, $password, $city, $role, $vehicule);
        } catch (Exception $th) {
            echo 'Error: ' . $th->getMessage();
        }
    }
}