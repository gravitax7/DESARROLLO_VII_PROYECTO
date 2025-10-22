<?php
class dataBase {
private $host = "127.0.0.1";
private $db_name = "proyecto";
private $username = "root";
private $password = "holamundo123";
public $conn;

    public function conectar(){
        $this-> conn = null;
        try{
            $this->conn = new PDO(//php data object es como el driver universal de sql de php
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this -> conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "error en la conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }

}
?>