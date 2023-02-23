<?php
echo"<h1>Prime Number</h1>";
for($i=2;$i<=100;$i++)
{
    for($j=2;$j<$i;$j++)
    {
    if($i%$j==0)
    {
        break;

    }
    }

if($j==$i)

{
    echo $i."<br>  ";

}

}
?>