<?php


### Functoions

// function foo(&$n){
//     // $n = 0x233234
//     $n = $n + 1;
// }

// $x = 5;
// foo($x); 
// echo $x; 


// function caller($f){
//     // $f = $foo
//     $f();
// }

// $foo = function(){
//     echo "Foo";
// };
// $bar = function(){
//     echo "Bar";
// };

// // $foo();
// caller($foo);
// caller($bar);


// function array_map($fname, $x){
//     // $fname = $myfunction
//     // $x = 5

//     myfunction($x)

// }

// $myfunction = function(){
//     echo "My Fucntion";
// }

// array_map($myfunction, 5)




// $arr = array_map(
//     function(){
//         echo "My Fucntion";
//     },
//     [1,2,3]
// )



// TASK:
// $data = [1,2,3];
// // $new_data = [];

// // foreach ($data as $d){
// //     $new_data[] = $d * $d;
// // }

// // $new_data = array_map(function($d){
// //     return $d + 1;
// // }, $data);

// $new_data = array_map(fn($d) => $d + 1, $data);


// foreach ($new_data as $d){
//     echo $d . "\n";
// }



// $hotels = ['Hotel A', 'Hotel B', 'Hotel C'];
// $prices = [100, 150, 200];

// $hotel_prices = array_combine($hotels, $prices);
// echo "Hotel Prices:\n";
// foreach ($hotel_prices as $hotel => $price) {
//     echo "$hotel: $$price\n";
// }