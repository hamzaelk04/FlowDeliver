<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Database\DbConnection;
use App\Entity\Deliver;
use App\Entity\Client;
use App\Repository\ClientRepository;
use App\Repository\UserRepository;
// use App\Service\AuthService;

// if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

// // $service = new AuthService();
// $controller = new AuthController();

// if($_POST['role'] === '2')
// {

// }

var_dump(
    $_POST
);

// header('location: ../login.php');
// var_dump($service->getDelivery());