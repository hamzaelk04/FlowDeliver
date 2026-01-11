<?php
namespace App\Repository;

use App\Database\DbConnection;
use Exception;
use PDO;

class DeliveryRepository
{
    private PDO $pdo;
    public function __construct(DbConnection $db)
    {
        $this->pdo = $db->connection();
    }

    public function create($userID, $vehicule)
    {
        try {
            $sql = "INSERT INTO delivery (id, id_vehicule) VALUES (:id, :id_vehicule)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':id' => $userID,
            ':id_vehicule' => $vehicule]);
        } catch (Exception $th) {
            echo 'failed creating delivery' . $th;
        }
    }
}