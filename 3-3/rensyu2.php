<?php

//$x = 5.7;
//echo round($x);

//
?>

<br>

<?php
echo pi();

function getcircleArea($r)
{
    $circle_area = $r * $r * pi();
    echo $circle_area;
}

getcircleArea(2);
?>