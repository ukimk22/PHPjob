<?php

$x = 5.7;
echo round($x);


?>

<br>

<?php
echo pi();
echo "<br>\n";

function getcircleArea($r)
{
    $circle_area = $r * $r * pi();
    echo $circle_area;
}

getcircleArea(2);
echo "<br>\n";

?>

<br>


<?php
echo mt_rand(1, 100);
?>

<br>


<?php
$str = "hogehoge";
echo strlen($str);

?>

<br>

<?php

$str = "yokoyama";
echo strpos($str, "o");

?>

<br>

<?php

$str = "yoneyama";
echo substr($str, -2, 2);

?>

<br>

<?php

$str = "shiratori";
echo str_replace("ra", "RA", $str);

?>

<br>


<?php
$name = "米山さん";
$limit_number = 40;
$price = 4000;

printf("%sの残り時間あと%d分で罰金%d円です", $name, $limit_number, $price);

echo "<br>\n";

$limit_hour = 4;
$limit_minute = 4;

printf("残り%02d時間%02d分です", $limit_hour, $limit_minute);


?>

<br>


<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchimi"];
echo count($members);

?>

<br>

<?php

$members = ["3", "76", "7", "93", "49", "534"];
sort($members);
var_dump($members);

?>


<br>

<?php

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchimi"];
var_dump(in_array("tanaka", $members));

?>

<br>


<?php

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchimi"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}

?>

<br>

<?php

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchimi"];
$atstr = implode("@", $members);
var_dump($atstr);

echo "<br>\n";

$re_members = explode("@", $atstr);
var_dump($re_members);

echo "<br>\n";

$str = "1,2,3,4,5";
$array = explode(",", $str);
var_dump($array);


?>

<br>


<?php
var_dump(time());

?>

<br>

<?php
echo date("Y年-m月-d日 H時:i分:s秒", time());

?>

<br>

<?php
echo strtotime("2017/2/16 11:25:00");
echo "<br>\n";
echo strtotime("last sunday");
echo "<br>\n";
echo strtotime("+2 day");

?>