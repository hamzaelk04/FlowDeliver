<?php
require_once __DIR__ . '/../../vendor/autoload.php';


use App\Controllers\AuthController;
use App\Entity\Deliver;
use App\Entity\Client;
use App\Service\AuthService;

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

$service = new AuthService();
$controller = new AuthController($service);

$controller->register($_POST);

// header('location: ../login.php');
var_dump($service->getDelivery());