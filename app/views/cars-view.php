<?php

class CarsView {

    function showCars($cars) {
        // Verifica si $cars es un arreglo
        if (is_array($cars) && !empty($cars)) {
            echo '<h2>Lista de Autos</h2>';
            echo '<ul>';
            foreach ($cars as $car) {
                // Imprime el modelo y la marca de cada auto
                echo '<li>' . htmlspecialchars($car->Motor) . ' - ' . htmlspecialchars($car->Modelo) . '</li>' . ' - ' . htmlspecialchars($car->Combustible) . '</li>'. ' - ' . htmlspecialchars($car->Transmision) . '</li>'.' - ' . htmlspecialchars($car->Tipo) . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<h2>No se encontraron autos disponibles.</h2>';
        }
    }
}
