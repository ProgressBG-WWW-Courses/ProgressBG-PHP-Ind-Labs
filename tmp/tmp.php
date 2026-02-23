<?php

function autoload() {
    $x = 2;
    if ($x > 1) { 
        return true;
    }
}


// echo "autoload: " . autoload() . "\n";


if (autoload()) {
    echo "true\n";
} else {
    echo "false\n";
}