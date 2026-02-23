<?php

require_once __DIR__ . '/../vendor/autoload.php';

// use App\Admin\User as AdminUser;
// use App\Shop\Utils\User as ShopUser;


// $admin_user = new AdminUser();
// $shop_user = new ShopUser();
// echo "User created successfully!";


use Brick\DateTime\LocalDate;
use Brick\DateTime\TimeZone;

echo LocalDate::now(TimeZone::utc()); // 2017-10-04

