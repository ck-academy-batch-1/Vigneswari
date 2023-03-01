<!DOCTYPE HTML>  
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
body{
background:url(bg.jpg) fixed no-repeat;
background-size: 100%;
}
.error {color:#ff9966;}

.container{
  align:center;
  padding-left:30%;
  max-width:200%;
  width:100%;
  color:whitealiceblue;
}
.c-form-container{
  color:white;
  font-size:18px;
  font-weight:50%;
}

.c-form-box input[type="text"],
.c-form-box textarea.form-control {
   
	  height: 50px;
    width:130%;
    border: 2px solid #ffc3a0;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: black;
    border-radius: 8px;
     }
    .c-form-box textarea{
    height: 150px;
    width:130%;
    border: 2px solid #ffc3a0;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: black;
    border-radius: 8px;
     }

     .btn{
       background: linear-gradient(#ffafbd , #ffc3a0);
       color:white;
       width:130%;
     }
     .contain{
       width:130%;
       border:2px solid #ffc3a0;
       border-radius: 8px;
       color:black;
       background-color:white;
       Padding:5% 35%;
     }
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr =$subjectErr = "";
$name = $email = $gender = $comment = $website = $subject  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$subject)) {
      $subjectErr = "Only Letters";
    }
  }
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="c-form-container section-container section-container-image-bg ">
	        <div class="container">
          <div class="row">
	            	<div class="col-sm-6 col-sm-offset-5 c-form-box">
                 
                        
<h2>Contact US</h2>
<p>Fill in the form below to contact us:</p>
<p><span class="error">* required field</span></p>
<form method="post" style="align:center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<br>
   <input type="text" name="name">
  <span class="error">*
  <?php echo $nameErr;?></span><br>
  E-mail: <br>
  <input type="text" name="email">
  <span class="error">* 
  <?php echo $emailErr;?></span>
  <br>
  Subject: <br>
  <input type="text" name="subject">
  <span class="error">* 
  <?php echo $subjectErr;?></span>
  <br>
  Website:<br> 
  
  <input type="text" name="website">
  <span class="error">*
  <?php echo $websiteErr;?></span>
  <br><br>
  Gender:&nbsp;
  <input type="radio" name="gender" value="female">Female  &nbsp;&nbsp;
  <input type="radio" name="gender" value="male">Male  &nbsp;&nbsp;
  <input type="radio" name="gender" value="other">Other
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
  Message: <br>
  <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input class=btn type="submit" name="submit" value="Submit" onclick="input()">  
</form><br><br>
<div class=contain>
<?php

echo "<h2>Your Input:</h2>";
echo "Name:  "."  ".$name;
echo "<br>";
echo "Email:  "."  ".$email;
echo "<br>";
echo "Subject:  "."  ".$subject;
echo "<br>";
echo "Website:  "."  ".$website;
echo "<br>";
echo "Gender: "."  ".$gender;
echo "<br>";
echo "Message: "."  ".$comment;



?>
</div>
</div>
</div>

</div>
</div>
</body>
</html>