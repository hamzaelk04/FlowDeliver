<?php
namespace App\Database;

use PDO;
use PDOException;

class DbConnection
{
    private $pdo;
    private $dbname = 'flowdeliver';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=" . $this->dbname;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            die('failed connection: '). $th;
        }
    }

    public function connection()
    {
        return $this->pdo;
    }
}
