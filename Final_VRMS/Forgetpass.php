<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['User']) ) {
header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
  <script type="text/javascript">
    function validateForm() {
      var currentPassword = document.forms["passwordForm"]["currentPassword"].value;
      var newPassword = document.forms["passwordForm"]["newpassword"].value;
      var retypeNewPassword = document.forms["passwordForm"]["rnewpassword"].value;

      if (currentPassword == "" || newPassword == "" || retypeNewPassword == "") {
        alert("Please fill in all fields");
        return false;
      }
    }
  </script>
</head>
<body>
  <fieldset>
    <div>  
      <p><h1 align="center">
         <span style="color:indianred"> Vehicle Rental Management System </span>
       </h1></p>
      <div>
        <br><br>
        <fieldset align="center">
          <form method="post" action="Controller/Pass.php" name="passwordForm" onsubmit="return validateForm();"><br>
            <fieldset>
              <h2 align="right">
                <a style="color:teal;" href="Login.php">Back</a>
              </h2>
              <legend><h2 align="center">CHANGE PASSWORD</h2></legend>
              <p align="center">
                <label>Current Password:</label> 
                <input type="password" name="currentPassword" value="">
                <br/><br/>
                <label style="color:green">New Password:</label>
                <input type="password" name="newpassword" value="">
                <br/><br/>
                <label style="color:red">Retype New Password:</label>
                <input type="password" name="rnewpassword" value="">
                <hr> 
                <h4 align="center"><input type="submit" name="submit" value="Submit"></h4>
                <br/>
              </p>
            </fieldset>
          </form>
        </div>
      <?php include "Footer.php"; ?>
      <br>
    </fieldset>
</body>
</html>
