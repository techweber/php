<?php
function myTest() {
	$x = 5; // local scope 
	echo "This output is from within the myTest function " . $x;
}

myTest();

echo $x;