
<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['User']) ) {
header("Location: login.php");
exit();
}
error_reporting(0);

include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $price = test_input($_POST["price"]);

  // Validate inputs
  if (empty($name)) {
    die("Driver name is required.");
  }
  if (empty($price) || !is_numeric($price)) {
    die("Rent must be a number.");
  }

  // Insert into database
  $sql = "INSERT INTO products (name, price)
  VALUES ('$name', '$price')";

if ($conn->query($sql) === TRUE) {
  echo "Driver added successfully.";
  die(); // Terminate the script after displaying the message
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<body>
<fieldset>
     
     <head>
         <title> Add Driver </title>
         <link rel="stylesheet" href="style.css">
       
     </head>
         
     <body>
    <fieldset>
     <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Vehicle Rental Management System </span>
           </h1>
        </p>
        <hr>  
    </div> 
        
    <div>
        <fieldset>
        
                
                <h2 align="right">
                    <a style ="color:teal;" href="Dashboard.php"> | Dashboard </a>
                    <a style ="color:teal;" href= "My Profile.php"> | My Profile</a> 
                    <a style ="color:teal;" href="EditProfile.php"> | Edit Profile</a> 
                    <a style ="color:teal;" href="Change Profile Picture Form.php"> | Change Profile Picture</a> 
                    <a style ="color:teal;" href="Changepass.php"> | Change Password</a>  
                    
                </h2>

<div align="center">
  <h1 align="center"> <b>Add Driver</b></h1><br /> 
<form  method="post" onsubmit="addProduct(event)">
  <label for="name">Driver name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="price">Driver Rent:</label>
  <input type="number" id="price" name="price"><br><br>
  <input type="submit" value="Add Driver">
</form>
</div>

<script>
  function addProduct(event) {
    event.preventDefault();
    var name = document.getElementById("name").value.trim();
    var price = document.getElementById("price").value.trim();

    // Validate name and price fields
    if (name === "" && price === "") {
      alert("Please enter name and price.");
      return;
    } else if (name === "") {
      alert("Please enter name.");
      return;
    } else if (price === "") {
      alert("Please enter price.");
      return;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
    xhttp.open("POST", "add_product.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name + "&price=" + price);
  }
</script>


</body>
</html>
