<?php


namespace App\classes;


class Car
{
    public $name;
    public $model;
    public $year;

    public function __construct($name, $model, $year)
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
    }
    public function displayCarInformation() {
        echo "<h3>Car Information:</h3>";
        echo "{$this->year} {$this->name} {$this->model}\n";
    }
}