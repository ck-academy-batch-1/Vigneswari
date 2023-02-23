<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LEAP YEAR</h1>
    
    <?php

        for($i=1900;$i<=2040;$i++){
            if($i%4==0){
                echo "<br>";
                echo "$i". "<br>";
            }
            
        }

    ?>
</body>
</html>