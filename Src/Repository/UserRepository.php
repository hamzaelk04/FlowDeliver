<?php
namespace App\Repository;

use App\Database\DbConnection;
use PDO;
use PDOException;

class UserRepository
{
    private PDO $pdo;
    public function __construct(DbConnection $db)
    {
        $this->pdo = $db->connection();
    }

    public function createUser($firstname, $lastname, $email, $city, $role, $password)
    {
        try {
            $sql = "INSERT INTO users (firstname, lastname, email, city, id_role, password)
        VALUES (:firstname, :lastname, :email, :city, :id_role, :passwords)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':email' => $email,
                ':city' => $city,
                ':id_role' => $role,
                ':passwords' => $password
            ]);

            return $this->pdo->lastInsertId();

        } catch (PDOException $th) {
            echo 'failed regster new use ' . $th;
        }
    }

    public function findByEmail($email)
    {
        try {
            $sql = "SELECT id, email, password, id_role FROM users WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            $value = $stmt->fetch(PDO::FETCH_ASSOC);

            return $value;
        } catch (PDOException $th) {
            echo "Failed finding by email " . $th;
        }
    }
}