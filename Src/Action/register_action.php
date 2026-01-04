<?php
require_once __DIR__ . '/composer/autoload_real.php';

use App\Controllers\AuthController;

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'register') header('location: ../register.php');

$controller = new AuthController();

$controller->register();

// header('location: ../login.php');
echo 'hhh';