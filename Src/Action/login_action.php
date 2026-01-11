<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Database\DbConnection;
use App\Controllers\LoginController;
use App\Repository\UserRepository;
use App\Service\AuthService;

if($_SERVER['REQUEST_METHOD'] !== 'POST' || $_POST['submit'] !== 'login') header('location: ../login.php');

$db = new DbConnection();

$repo = new UserRepository($db);

$login = new AuthService($repo);

$controller = new LoginController($login);

$controller->login($_POST);