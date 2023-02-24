<?php
echo"PYRAMID<br> <br>";

$g=1;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo $g." ";
        $g++;
    
    }
    echo "<br>";
}
?>
