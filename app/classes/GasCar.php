<?php


namespace App\classes;


class GasCar extends Car
{

    public $type,$fuelEfficiency;

    public function __construct($type,$name, $model, $year, $fuelEfficiency) {
        parent::__construct($name, $model, $year);
        $this->type = $type;
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function displayCarInformation() {
        parent::displayCarInformation();
        echo "<br>Fuel Efficiency: {$this->fuelEfficiency} MPG\n";
    }

}