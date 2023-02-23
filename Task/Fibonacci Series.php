<?php
$number=0;
$n1=0;
$n2=1;
echo"<h1>Fibonacci series</h1>";

while($number<10)
{
    $n3=$n1+$n2;
    echo $n3 ."<br>";
    $n1=$n2;
    $n2=$n3;
    $number=$number+1;
}
?>