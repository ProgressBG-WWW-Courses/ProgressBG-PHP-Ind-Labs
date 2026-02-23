<?php

require_once __DIR__ . '/../vendor/autoload.php';

$shop_user = new App\Shop\User();
$admin_user = new App\Admin\User();
echo "Users created successfully!";