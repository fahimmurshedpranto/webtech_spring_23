<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $DOBErr = $degreeErr = "";
$name = $email = $gender = $DOB = $degreeErr = "";

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
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  




  if (empty($_POST["DOB"])) {
    $DOBErr = "DOB is required";
  } else {
    $DOB = test_input($_POST["DOB"]);
    
    if (!filter_var($DOB, FILTER_VALIDATE_DOB)) {
      
    }
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  //$checked_arr = $_POST['blood_group'];
//$count = count($checked_arr);
//echo "There are ".$count." checkboxe(s) are checked";
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Register Now</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Date Of Birth:<input type="date" name="DOB">
  <span class="error">* <?php echo $DOBErr;?></span>
  <br><br>

  DEGREE:<input type="checkbox" name="degree" value="SSC"><label for="degree1">SSC</label>
  <input type="checkbox" name="degree" value="HSC"><label for="degree2">HSC</label>
  <input type="checkbox" name="degree" value="BSc"><label for="degree3">BSc</label>
  <input type="checkbox" name="degree" value="MSc"><label for="degree4">MSc</label><br><br>
  <span class="error">* <?php echo $degreeErr;?></span><br><br>

  BLOOD GROUP:
<select id="cars">
  <option value="A+">A+</option>
  <option value="O+">O+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O-</option>
</select>

<br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $DOB;
echo "<br>";
echo $degree;
?>

</body>
</html>