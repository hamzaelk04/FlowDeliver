<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Entity\User;
use App\Service\AuthService;

// $client = new User();
$logic = new AuthService();

// $logic->register('hh', 'lkjhgfd');

// var_dump($client);


$firstname = $_POST['firstname'];

echo $firstname;