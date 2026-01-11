<?php
namespace App\Service;

use App\Database\DbConnection;
use App\Repository\DeliveryRepository;
use App\Repository\UserRepository;

class DeliveryService
{
    private DeliveryRepository $delivery;
    private DbConnection $db;
    private UserRepository $user;

    public function __construct($userRepo, $deliveryRepo)
    {
        $this->user = $userRepo;
        $this->delivery = $deliveryRepo;
    }

    public function register(array $data, $hashedpassword)
    {
            $userId = $this->user->createUser($data['firstname'], $data['lastname'], $data['email'],  $data['city'], $data['role'], $hashedpassword);

            $this->delivery->create($userId, $data['vehicule']);
    }
}