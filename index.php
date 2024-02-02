<?php
require_once "vendor/autoload.php";
use App\classes\Car;
use App\classes\ElectricCar;
use App\classes\GasCar;


$electricCar =new ElectricCar('Electric','Tesla','Model S','2022','100');
$electricCar->displayCarInformation();
echo "<br>";
$gasCar=new GasCar('Gas','Toyota','Camry','2022','30');
$gasCar->displayCarInformation();

