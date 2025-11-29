<?php
// en los archivos models basicamente creo las estructuras sql para devolver un modelo especifico, como crear, actualizar, borrar, mostrar todo.
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
public function create($name, $cedula, $correo){
    $sql = "INSERT INTO proyecto.usuarios (name,cedula, correo) 
            VALUES (:name,:cedula, :correo)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':correo',$correo);
    $stmt->bindParam(':cedula',$cedula);
    return $stmt->execute();
}
    

}
?>