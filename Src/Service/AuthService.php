<?php
namespace App\Service;

use App\Entity\Deliver;
use App\Entity\Client;

use Exception;
class AuthService
{
    private Client $client;
    private Deliver $delivery;

    public function register($firstname, $lastname, $email, $password, $city, $role, $vehicule)
    {
        if(strlen($firstname) < 3 || strlen($lastname) < 3) throw new Exception("firstname and lastname should be longer than 3 characters");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception("Invalid email");
        if (strlen($password) < 6) throw new Exception("Password too short");
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

        if($role === 'deliver')
        {
            $delivery = new Deliver($vehicule);
        }
    }
}