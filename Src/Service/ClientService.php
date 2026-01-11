<?php
namespace App\Service;

use App\Database\DbConnection;
use App\Repository\ClientRepository;
use App\Repository\UserRepository;
use App\Service\UserService;

class ClientService
//  extends UserService
{
    private ClientRepository $client;
    private DbConnection $db;
    private UserRepository $user;

    public function __construct($userRepo, $clientRepo)
    {
        $this->user = $userRepo;
        $this->client = $clientRepo;
    }

    public function register(array $data, $hashedpassword)
    {
            $userId = $this->user->createClient($data['firstname'], $data['lastname'], $data['email'],  $data['city'], $data['role'], $hashedpassword);

            $this->client->create($userId);
            var_dump($data);
            echo 'test';
    }
}