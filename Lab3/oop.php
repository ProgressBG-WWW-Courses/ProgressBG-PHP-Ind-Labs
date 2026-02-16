<?php

// $car1_model = "Toyota Camry";
// $car1_year = 2020;

// $car2_model = "Honda Accord";
// $car2_year = 2021;


// $bus_model = "Mercedes-Benz Sprinter";
// $bus_year = 2019;

// function displayBusInfo($model, $year) {
//     echo "The BUS: Model: $model, Year: $year\n";
// }

// function displayCarInfo($model, $year) {
//     echo "The CAR: Model: $model, Year: $year\n";
// }

// displayCarInfo($car1_model, $car1_year);
// displayCarInfo($car2_model, $car2_year);
// displayBusInfo($bus_model, $bus_year);

// Class is just a blueprint for creating objects. 
// Car
//     // properties
//     - model
//     - year
//     // methods
//     - displayInfo()



// class Car{
//     // properties
//     public $model;
//     public $year;

//     // constructor:
//     function __construct($model, $year)
//     {
//         // $this = $car2
//         echo "New object is created: {$model}, {$year}\n";
//         $this->model = $model;
//         $this->year = $year;
//     }

//     // methods
//     function displayInfo($model, $year) {
//         echo "The CAR: Model: $model, Year: $year\n";
//     }
// }


// // Instantiation (createing object):
// $car1 = new Car('Toyota', 2020); // Car.__construct('Toyota Camry', 2020)
// $car2 = new Car('Car2', 1999);

// echo $car1->model."\n";
// echo $car2->model."\n";

// create BUS class as HW



class Car{

    function __construct(
        public $model,
        public $price
    )
    {}

    function calcPriceWithTax($tax){
        echo $this->price * (1 + $tax);
    }
}

$car1 = new Car('Toyota', 2000);
// echo "Car1 model: {$car1->model}, price: {$car1->price}";













