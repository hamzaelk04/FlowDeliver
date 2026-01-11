<?php
namespace App\Service;

use App\Repository\UserRepository;

class AuthService
{
    private UserRepository $repo;

    public function __construct($repo)
    {
        $this->repo = $repo;
    }
    public function login(array $data)
    {
        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Initialize flash_messages array if it doesn't exist
        if (!isset($_SESSION['flash_messages'])) {
            $_SESSION['flash_messages'] = [];
        }
        
        $user = $this->repo->findByEmail($data['email']);

        if ($user === false) {
            $_SESSION['flash_messages'][] = [
                'type' => 'error',
                'message' => 'Email not found'
            ];
            header('Location: ../login.php');
            exit;
        }

        if (!password_verify($data['password'], $user['password'])) {
            $_SESSION['flash_messages'][] = [
                'type' => 'error',
                'message' => 'Incorrect password'
            ];
            header('Location: ../login.php');
            exit;
        }

        $_SESSION['user_id'] = $user['id'];

        if ($user['id_role'] == '2') header('Location: ../dashboardClient.php');
        
        if ($user['id_role'] == '3') header('Location: ../dashboardDelivery.php');
    }
}