<?php

//$country_1 = "America";
//$country_2 = "Japan";
//$country_3 = "China";
//$country_4 = "Korea";

//echo $country_1;
//echo $country_2;
//echo $country_3;
//echo $country_4;


//$countries = ["America", "Japan", "China", "Korea"];

//echo $countries[0];
//echo $countries[1];
//echo $countries[2];
//echo $countries[3];

//var_dump($countries);




//$fruits = ["りんご", "みかん", "ぶどう"];

//echo $fruits[0];
//echo '<br>';
//echo $fruits[1];
//echo '<br>';
//echo $fruits[2];
//echo '<br>';
//var_dump($fruits);

//↓これをこうする↓

//$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

//echo $fruits["apple"];
//echo $fruits["orange"];
//echo $fruits["grape"];
//var_dump($fruits);




//$color = ["red" => "赤", "blue" => "青", "green" => "緑"];

//echo $color["red"];
//echo $color["blue"];
//echo $color["green"];

//$color["yellow"] = "黄色";
//echo '<br>';
//var_dump($color);



//$fruits = ["りんご", "みかん", "もも"];

//foreach ($fruits as $value) {
//  echo $value;
//}



//$fruits = ["apple" => "といったらりんご", "orange" => "といったらみかん", "peach" => "といったらもも"];

//foreach ($fruits as $key => $value) {
//  echo $key;
//  echo $value;
//  echo '<br>';
//}



//function getTriangleArea($base, $height)
//{
//  $area = $base * $height / 2;
//  print "三角形の面積は" . $area . "だよ";
//}

//getTriangleArea(10, 5);
//getTriangleArea(15, 8);
//getTriangleArea(8, 6);




function chokuhotai($vertical, $width, $height,)
{
    $area = $vertical * $width * $height;
    print "直方体の体積は" . $area . "だよ";
}

chokuhotai(5, 10, 8);
