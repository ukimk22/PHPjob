<?php

for ($baisu = 1; $baisu <= 100; $baisu++) {

    if ($baisu % 3 == 0 && $baisu % 5 == 0) {
        echo "FizzBuzz!!";
        echo '<br>';
    } elseif ($baisu % 3 == 0) {
        echo "Fizz!";
        echo '<br>';
    } elseif ($baisu % 5 == 0) {
        echo "Buzz!";
        echo '<br>';
    } else {
        echo $baisu;
        echo '<br>';
    }
}
