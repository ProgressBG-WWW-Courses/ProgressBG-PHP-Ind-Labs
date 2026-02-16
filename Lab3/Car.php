<?php

class Vehicle{
    public $model;
    private $price;
    
    function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    function getPrice(){
        return $this->price;
    }

    function setPrice($price){
        if($price < 0){
            echo "Price cannot be negative!";
            return;
        }
        $this->price = $price;
        return $this;   
    }

    function calcPriceWithTax($tax){
        echo $this->price * (1 + $tax);
    }
}

class Car extends Vehicle{
    public $model;
    private $price;
    
    function __construct($model, $year)
    {
        parent::__construct($model, $year );
    }


    
}

class Bus extends Vehicle{
    public $fuel;

    function __construct($model, $year, $fuel)
    {
        parent::__construct($model, $year)
    }
    
}