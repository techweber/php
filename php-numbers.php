<?php

// # check if the value in $x is int
// $x = 5985;
// var_dump(is_int($x));

// # check if the value in $x is float
// $x = 59.85;
// var_dump(is_float($x));

// # check if numeric value is finite or infinite

// $x = 1.9e411;
// var_dump($x);

// $x = 5985;
// var_dump(is_numeric($x));
// $x = "5985";
// var_dump(is_numeric($x));
// $x = "59.85" + 100;
// var_dump(is_numeric($x));
// $x = "Hello";
// var_dump(is_numeric($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;



?>