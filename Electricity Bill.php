<!DOCTYPE html>
<head>
	<title>Electricity Bill</title>
</head>
<body>
		<h1>Php - Electricity Bill</h1>
		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units">
            	<input type="submit" name="btn" id="btn" value="Submit">
		</form>
		    <?php echo '<br />' . $result_str; ?>
</body>

<?php
$result_str = $result = '';
if (isset($_POST['btn'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}

function bill($units) {
    $unitone = 4;
    $unitwo = 5;
    $unithree = 6;
    $unitfour = 7;

    if($units <= 50) {
        $bill = $units * $unitone;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unitone;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unitwo);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unitwo);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unithree);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unitwo) + (100 * $unithree);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unitfour);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>

</html>