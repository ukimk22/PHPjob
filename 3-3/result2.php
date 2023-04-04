<?php

$num = $_POST['number'];

$num_arr = str_split($num);

$num_key = array_rand($num_arr);

$result = $num_arr[$num_key];
var_dump($result);


if ($result = 0) {
    echo "凶";
} elseif ($result >= 1 && $result <= 3) {
    echo "小吉";
} elseif ($result >= 4 && $result >= 6) {
    echo "中吉";
} elseif ($result = 7 && $result = 8) {
    echo "吉";
} elseif ($result = 9) {
    echo "大吉";
}






//$date = date("Y/-m/-d", time());

//printf("%sの運勢は%sです。", $date, $result);



echo '</br>';
