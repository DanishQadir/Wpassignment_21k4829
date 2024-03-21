<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vehicle Information</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
    }
    .vehicle-info {
        margin-bottom: 20px;
    }
    .vehicle-info h2 {
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Vehicle Information</h1>

    <?php

    class Vehicle {
        protected $make;
        protected $model;

        public function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        
        public function start() {
            return "Starting the {$this->make} {$this->model}.";
        }

        
        public function stop() {
            return "Stopping the {$this->make} {$this->model}.";
        }
    }

    
    class Car extends Vehicle {
        protected $fuelType;

    
        public function __construct($make, $model, $fuelType) {
            parent::__construct($make, $model);
            $this->fuelType = $fuelType;
        }

        
        public function accelerate() {
            return "Accelerating the {$this->make} {$this->model}.";
        }
    }

    
    class Bicycle extends Vehicle {
        protected $numGears;

        
        public function __construct($make, $model, $numGears) {
            parent::__construct($make, $model);
            $this->numGears = $numGears;
        }

        
        public function ringBell() {
            return "Ringing the bell of the {$this->make} {$this->model}.";
        }
    }

    
    class ElectricCar extends Car {
        protected $batteryCapacity;

        public function __construct($make, $model, $fuelType, $batteryCapacity) {
            parent::__construct($make, $model, $fuelType);
            $this->batteryCapacity = $batteryCapacity;
        }

        
        public function chargeBattery() {
            return "Charging the battery of the {$this->make} {$this->model}.";
        }
    }

    
    $car = new Car("Toyota", "Corolla", "Petrol");
    echo "<div class='vehicle-info'>";
    echo "<h2>Car</h2>";
    echo "<p>" . $car->start() . "</p>";
    echo "<p>" . $car->accelerate() . "</p>";
    echo "<p>" . $car->stop() . "</p>";
    echo "</div>";

    $bicycle = new Bicycle("Giant", "Escape", 21);
    echo "<div class='vehicle-info'>";
    echo "<h2>Bicycle</h2>";
    echo "<p>" . $bicycle->start() . "</p>";
    echo "<p>" . $bicycle->ringBell() . "</p>";
    echo "<p>" . $bicycle->stop() . "</p>";
    echo "</div>";

    $electricCar = new ElectricCar("Tesla", "Model S", "Electric", "100 kWh");
    echo "<div class='vehicle-info'>";
    echo "<h2>Electric Car</h2>";
    echo "<p>" . $electricCar->start() . "</p>";
    echo "<p>" . $electricCar->accelerate() . "</p>";
    echo "<p>" . $electricCar->chargeBattery() . "</p>";
    echo "<p>" . $electricCar->stop() . "</p>";
    echo "</div>";
    ?>
</div>
</body>
</html>
