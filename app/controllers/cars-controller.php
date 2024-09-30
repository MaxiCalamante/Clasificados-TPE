<?php

require_once 'app/models/cars-model.php';
require_once 'app/views/cars-view.php';

class CarsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CarsModel();
        $this->view = new CarsView();
    }

    public function showCars() {
        $cars = $this->model->getAllCars();
        $this->view->showCars($cars);
    }

}