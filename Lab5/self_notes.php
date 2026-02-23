<?php
class Currency
{
    // instance properties
    public float $bgnRate1 = 2222;

    // static properties
    public static float $bgnRate2 = 3333;// Currency::$bgnRate

}


$bgnRate = 1111;

$currency = new Currency();

echo ($bgnRate); // 1111
echo ($currency->bgnRate1);// 222
echo (Currency::$bgnRate2);// 333