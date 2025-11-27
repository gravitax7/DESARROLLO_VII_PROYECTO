<?php
require_once __DIR__ . '/../config.php';
class dataBase {

public $conn;

    public function __construct(){
        $this-> conn = null;
        try{
            $this->conn = new PDO(//php data object es como el driver universal de sql de php
                "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4",DB_USER,DB_PASS);
            $this -> conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "error en la conexión: " . $exception->getMessage();
        }

    
    }

}
?>