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
        if($role === 'deliver')
        {
            $delivery = new Deliver(
                $firstname,
                $lastname,
                $email,
                $password,
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
                $password,
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