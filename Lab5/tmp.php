<?php
try {
    // 1. We try to execute this risky code
    $dividend = 10;
    $divisor = 1;
    
    if ($divisor === 0) {
        throw new Exception("Cannot divide by zero!");
    }
    
    echo $dividend / $divisor;
    
} catch (Exception $e) {
    // 2. If an Exception is thrown above, execution jumps here
    echo "An error occurred: " . $e->getMessage();
} 


echo "\nExecution continues...";