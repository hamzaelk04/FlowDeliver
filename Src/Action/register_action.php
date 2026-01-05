<?php
require_once __DIR__ . '/../../vendor/autoload.php';


use App\Controllers\AuthController;
use App\Entity\Deliver;
use App\Entity\Client;

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

$controller = new AuthController();

$controller->register($_POST);

// header('location: ../login.php');
echo 'hhh';

// var_dump();