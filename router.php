<?php
require_once 'app/models/cars-model.php';
require_once 'app/controllers/cars-controller.php';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

switch($action){
    case 'home':
        $CarsController = new CarsController();
        $CarsController->showCars();
        break;
} 
?>
