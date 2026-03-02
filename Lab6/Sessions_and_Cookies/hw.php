<?php

//1
// echo '1' . '<br>' . '$a == $b Equaltrue if $a is equal to $b after type juggling' . '<br>';
// echo '$a === $b	Identical true if $a is equal to $b, and they are of the same type.' . '<br><br>';

// echo 'Example' . '<br>';
// echo '5' == 5 ? "true" : "false";
// echo '<br>';
// echo '5' === 5 ? "true" : "false";
// echo '<br><br>';

// //2
// $number = 123234.567;

// echo '2' . '<br>' . number_format(round($number, 2), 2, '.', '');
// echo 'function number_format & round';
// echo '<br><br>';

//3
// echo '3' . '<br>' . 'Why use (int) here?' . '<br>';
// how to echo this text
$param1 ="1.56";
$id = (int) $param1;
echo "$id";


// echo '$id = (int) $this->params(\'param1\')';
// echo 'To define integer for id';
// echo '<br><br>';

// //4
// echo '4' . '<br>' . 'Hotel Cost Calculator' . '<br>';

// $roomType = "Deluxe Suite";
// $pricePerNight = 250;
// $nights = 3;
// $taxRate = 0.10;
// $stotal = $pricePerNight * $nights;
// $total = $stotal * (1 + $taxRate);

// echo "The Subtotal cost for $nights nights in the $roomType  is €$stotal";
// echo '<br>';
// echo "The Total cost for $nights nights in the $roomType  is €$total";

//done