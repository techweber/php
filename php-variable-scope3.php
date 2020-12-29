<?php

// global scope variables
$x = 50;
$y = 100;

function myTest() {
	global $x, $y;
	$y = $x + $y;
}

myTest();

echo $y;