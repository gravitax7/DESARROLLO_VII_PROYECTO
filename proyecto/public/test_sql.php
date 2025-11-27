<?php
require_once '../database/dataBase.php';
$database = new DataBase();
$conn = $this->database->conn;

if($conn){
    echo "<h1>Conexion establecida con éxito</h1>";
    $query = $conn ->query("Select * from usuarios");
    foreach($query as $rows){
        echo "ID: {$rows['id']} - Nombre: {$rows['nombre']} - Correo: {$rows['correo']} <br>";
    }
} else
{
    echo "<h2>Error al conectar a la base de datos</h2>";
}
?>