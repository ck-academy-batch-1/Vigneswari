<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Diomand</h1>
<?php
$rows=7;
$cols=($rows*2)-1;
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$cols;$j++){
        $diff=abs($j-($rows+1));
        $min=min($i- 1,$rows-$i);
        if($diff<=$min){
            echo ($min + 1 - $diff) * 3 . " ";
        }
        else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
}
?>

  
  </body>
</html>