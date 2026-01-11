<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Database\DbConnection;
use App\Repository\ClientRepository;
use App\Repository\UserRepository;
use App\Service\ClientService;

$db = new DbConnection();
$clientRepo = new ClientRepository($db);
$userRepo = new UserRepository($db);
$clientService = new ClientService($userRepo, $clientRepo);

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

$controller = new AuthController($clientService);

$controller->register($_POST);