<?php 
echo "<h1>Factorial of Number</h1><br>" ;
$num = 8;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>