<?php

function construct($model, $year)
{
    $model = $model;
    $year = $year;
    
    echo "model: {$model}\n";
    echo "year: {$year}";
}


construct("Toyota", 2020);