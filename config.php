<?php
class Config {
    private $host = 'localhost';
    private $db   = '3A';
    private $user = 'root';
    private $pass = '';

    public function getConnection() {
        $dsn = "mysql:host={$this->host};dbname={$this->db}";
        try {
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
?>
