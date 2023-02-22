<?php

$fruits = ["りんご" => "100", "みかん" => "30", "もも" => "500"];

$num = [3, 5, 6];

function getPrice($fruits, $num)
{
    $price = $fruits * $num;
    return $price;
}

$i = 0;
foreach ($fruits as $key => $value) {
    echo $key . "は" . getPrice($value, $num[$i]) . "円です。";
    $i++;
    echo '<br>';
}
