<?php
namespace App\Service;

use App\Entity\Deliver;
use App\Entity\Client;
use App\Repository\AuthRepository;

use Exception;
class AuthService
{
    private Client $client;
    private Deliver $delivery;

    private AuthRepository $repo;

    public function register($firstname, $lastname, $email, $password, $city, $role, $vehicule)
    {
        if(strlen($firstname) < 3 || strlen($lastname) < 3) throw new Exception("firstname and lastname should be longer than 3 characters");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception("Invalid email");
        if (strlen($password) < 6) throw new Exception("Password too short");
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

        if($role === 'deliver')
        {
            $delivery = new Deliver(
                $firstname,
                $lastname,
                $email,
                $hashedpassword,
                $city,
                $role,
                $vehicule
                );
            $this->delivery = $delivery;
        } else {
            $client = new Client(
                $firstname,
                $lastname,
                $email,
                $hashedpassword,
                $city,
                $role
            );
            $this->client = $client;
        }
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }
}