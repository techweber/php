<?php

// global scope variables
$x = 90;
$y = 200;

function myTest() {
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();

echo $y;