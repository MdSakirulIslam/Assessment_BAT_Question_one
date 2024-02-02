<?php


namespace App\classes;


class ElectricCar extends Car
{
    public $type,$batteryCapacity;

    public function __construct($type,$name, $model, $year, $batteryCapacity) {
        parent::__construct($name, $model, $year);
        $this->type = $type;
        $this->batteryCapacity = $batteryCapacity;
    }

    public function displayCarInformation() {
        parent::displayCarInformation();
        echo "<br/>Battery Capacity: {$this->batteryCapacity} kWh\n";
    }

}
//$carType1 = readline("Enter car type (Electric/Gas): ");
//$name1 = readline("Enter Name: ");
//$model1 = readline("Enter model: ");
//$year1 = readline("Enter year: ");
//
//if ($carType1 === "Electric") {
//    $batteryCapacity1 = readline("Enter battery capacity (kWh): ");
//    $electricCar1 = new ElectricCar($name1, $model1, $year1, $batteryCapacity1);
//    $electricCar1->displayCarInformation();
//} elseif ($carType1 === "Gas") {
//    $fuelEfficiency1 = readline("Enter fuel efficiency (MPG): ");
//    $gasCar1 = new GasCar($name1, $model1, $year1, $fuelEfficiency1);
//    $gasCar1->displayCarInformation();
//}