<?php
$x = 5; // global scope

function myTest() {
	echo $x;
}

myTest();

echo "variable outside function is " . $x;
