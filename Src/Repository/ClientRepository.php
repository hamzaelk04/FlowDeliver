<?php
namespace App\Repository;

use App\Database\DbConnection;
use Exception;
use PDO;

class ClientRepository
{
    private PDO $pdo;
    public function __construct(DbConnection $db)
    {
        $this->pdo = $db->connection();
    }

    public function create($userID)
    {
        try {
            $sql = "INSERT INTO clients (id) VALUES (:id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':id' => $userID]);
        } catch (Exception $th) {
            echo 'failed creating client' . $th;
        }
    }
}