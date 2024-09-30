<?php 
class CarsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vehiculos-db-mod;charset=utf8', 'root', '');
    }


    public function getAllCars() {

        $query = $this->db->prepare("SELECT * FROM modelos");
        $query->execute();

        $cars = $query->fetchAll(PDO::FETCH_OBJ);

        return $cars;
    }

}
