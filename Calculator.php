<!DOCTYPE html>

<head>
	<title>Calculator</title>
</head>

<?php
$fn = $_POST['fn'];
$sn = $_POST['sn'];
$res = $_POST['res'];
$result = '';
if (is_numeric($fn) && is_numeric($sn)) {
    switch ($res) {
        case "Add":
           $result = $fn + $sn;
            break;
        case "Subtract":
           $result = $fn - $sn;
            break;
        case "Multiply":
            $result = $fn * $sn;
            break;
        case "Divide":
            $result = $fn / $sn;
    }
}

?>

<body>

	<h1>Calculator</h1>
	  <form action="" method="post" id="quiz-form">
           <label>FirstNumber:</label>
                <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" > <br><br>
                <label>LastNumber:</label>
                <input type="text" name="sn" id="sn" value="<?php echo $sn; ?>" ><br><br>
                <label>Result:</label>
                <input name="result" value="<?php echo $result; ?>"> <br><br>
            
            <input type="submit" name="res" value="Add" >
            <input type="submit" name="res" value="Subtract" >
            <input type="submit" name="res" value="Multiply" >
            <input type="submit" name="res" value="Divide" >

	  </form>
    
</body>
</html>