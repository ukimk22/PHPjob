<?php

$number = $_POST['number'];

$date = date("Y/-m/-d", time());


$unsei = mt_rand();


if ($unsei = 0) {
    echo "凶";
} elseif ($unsei >= 1 && $unsei <= 3) {
    echo "小吉";
} elseif ($unsei >= 4 && $unsei >= 6) {
    echo "中吉";
} elseif ($unsei = 7 || $unsei = 8) {
    echo "吉";
} elseif ($unsei = 9) {
    echo "大吉";
}






printf("%sの運勢は%sです。", $date, $unsei);



echo '</br>';




//echo "選ばれた数字は";
//echo mt_rand(0, 9);
