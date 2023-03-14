<?php
echo "<h1>Area of Rectangle</h1>";

function rect($length = 6, $width = 8) 
{
    $arearect = $length * $width;
    echo "Rectangle length " . $length . " & Rectangle width " . $width . "<br><br>"."Area Of Rectangle "  . $arearect ;
}
rect();

echo "<h1>Area of Triangle</h1>";
function tri($base = 15, $height = 20){
$areatri = ($base * $height) / 2;
echo "Triangle Base $base & Triangle height $height " . "<br><br> Area OF Triangle ". $areatri;
}
tri();

echo "<h1>Area of Square</h1>";
function squ($side = 4)
{
	$areasqu = $side * $side;
	echo "Square Side value $side". "<br><br> Area Of Square  " .$areasqu;
}
squ();

echo "<h1>Area of Circle</h1>";
function cir($pi = 3.14, $r=7){
$areacir = $pi * $r * $r;
echo " Circle Radius $r <br><br> Area of a Circle is: ".$areacir;
}
cir();

?>