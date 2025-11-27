<?php
// estos controladores basicamente manejan la petición del usuario o la petición por defecto, si el usuario quiere listar todo o hacer algun ajuste, el controlador funciona como intermediario.
require_once __DIR__ . '/../models/listModels.php';
require_once BASE_PATH . '/database/dataBase.php';

class listControllers {
    private $model;
    private $db;
    private $connect;


    public function __construct(){
        $this->db = new dataBase();
        $this->connect = $this->db->conn;

        $this->model = new listModels($this->connect);
    }

    public function index(){
        $lists = $this->model->allRows();
        // impresion de valores devueltos para ver estructura del array
        var_dump($lists);
        include BASE_PATH . '/views/lists/list_index.php';

    }

}
