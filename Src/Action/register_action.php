<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Database\DbConnection;
use App\Repository\ClientRepository;
use App\Repository\DeliveryRepository;
use App\Repository\UserRepository;
use App\Service\ClientService;
use App\Service\DeliveryService;

$db = new DbConnection();

$userRepo = new UserRepository($db);
$clientRepo = new ClientRepository($db);
$deliveryRepo = new DeliveryRepository($db);

$clientService = new ClientService($userRepo, $clientRepo);
$deliveryService = new DeliveryService($userRepo, $deliveryRepo);

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

try {
    $controller = new AuthController($clientService, $deliveryService);

    $controller->register($_POST);

    header('location: ../login.php');
    

} catch (\Exception $th) {
    echo 'failed registration ' . $th;
}