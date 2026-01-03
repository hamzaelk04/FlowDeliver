<?php


use App\Entity\User;

$client = new User();

$client->setFirstname($_POST['firstname']);

var_dump($client);