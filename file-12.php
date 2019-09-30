<?php

//Swapping 2 numbers w/o using 3rd variable (19-9-19)
$x = 1;
$y = 2;
echo "Before Swap: ";
echo "X = ".$x;
echo " Y = ".$y;

echo "<BR>";

$x = $x + $y;		$y = $x - $y;		$x = $x - $y;
echo "After Swap: ";
echo "X = ".$x;
echo " Y = ".$y;

?>