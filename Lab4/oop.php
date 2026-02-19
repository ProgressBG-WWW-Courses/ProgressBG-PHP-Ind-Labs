<?php

class User {
    public $address;

    public function getAddress()
    {
        echo "$this->address";
    }
}

// Old way (PHP 7) — must check each step:
$country = null;

$user = new User();

// if ($user->getAddress() !== null) {
//     $country = $user->getAddress()->getCountry();
// }

$country = $user->getAddress()?->getCountry();

