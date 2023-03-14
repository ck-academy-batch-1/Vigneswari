<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<body>
        <h1>Chess Board Design</h1>
        <table width="600px" border="2px">
            <?php
            $i = 0;
            for($col = 0; $col < 8; $col++) {
                echo "<tr>";
                $i = $col;

                for($row = 0; $row < 8; $row++) {
                    if($i%2 == 0) {
                        echo"<td height=60px width=30px bgcolor=black></td>";
                        $i++;
                    }
                    else {
                        echo"<td height=60px width=30px bgcolor=white></td>";
                        $i++;
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    
</body>
</html>
