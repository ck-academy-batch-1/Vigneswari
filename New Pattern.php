<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="color">
    
<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
          if ((($column == 1 or $column == 5) and $row < 5) or ($row == 6 and $column == 3) or ($row == 5 and ($column == 2 or $column == 4)))
            echo "***";    
        else  
            echo "&nbsp;&nbsp;&nbsp; ";     
	}        
  echo "<br>";
}

echo "<br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
   if ($column == 3 or ($row == 0 and $column > 0 and $column < 6) or ($row == 6 and $column > 0 and $column < 6))
            echo "**";    
        else  
        echo "&nbsp;&nbsp;&nbsp;";  
	}        
    echo "<br>";
}
echo "<br>";
function crown($length,$height)
{
    for ($i = 0; $i < $height; $i++) 
    {
        for ($j = 0; $j < $length; $j++) 
        {
  
            if ($i == 0) 
            {
  
 
                if ($j == 0 || 
                    $j == $height || 
                    $j == $length - 1) 
                {
                    echo "o";
                }
                else 
                {
                    echo "&nbsp;&nbsp";
                }
            }
  
            else if ($i == $height - 1) 
            {
                echo "o";
            }
  
            else if (($j < $i || 
                      $j > $height - $i) &&
                     ($j < $height + $i || 
                      $j >= $length - $i))
  
                echo "*";
            else
                echo "&nbsp;&nbsp";
        }
        echo "<br>";
    }
}
  

$length = 15;
  

$height = ($length - 1) / 2;
  

crown($length, $height);
  
?>
</div>
</body>
</html>