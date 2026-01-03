<?php
namespace App\Controller;

require_once __DIR__ . '/../vendor/autoload.php';

use App\Entity\User;

class AuthController
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function register()
    {
        $this->user->setFirstname($_POST['firstname']);
        $this->user->setFirstname($_POST['firstname']);
        $this->user->setFirstname($_POST['firstname']);
        $this->user->setFirstname($_POST['firstname']);
        $this->user->setFirstname($_POST['firstname']);
        $this->user->setFirstname($_POST['firstname']);
        
    }
}