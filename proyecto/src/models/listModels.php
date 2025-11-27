<?php
require_once __DIR__ . '/../../config.php';
require_once BASE_PATH . '/database/dataBase.php';


class listModels{

private $conn;

public function __construct($conn){
$this->conn = $conn;
}

public function allRows(){
    $sql = "Select nombre, cedula, correo From usuarios Order by id desc";
    $stmt = $this->conn ->query($sql);
    //
        //$stmt->execute();
    return $stmt ->fetchAll(PDO::FETCH_ASSOC);
   // }
    
                        }
}
?>