<?php
namespace App\Controllers;

use App\Service\AuthService;
class LoginController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(array $data)
    {
        if(!isset($data['submit']) || $data['submit'] !== 'login') header('location: ../login.php');

        $this->authService->login($data);
    }
}