<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['User']) ) {
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
function validateForm() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (username == "") {
        alert("Please enter your username.");
        return false;
    }

    if (password == "") {
        alert("Please enter your password.");
        return false;
    }
}
</script>
</head>

<body>


    
<br>
<?php
       include 'NavBar.php';
       ?>  
      
           <br>
           
           <fieldset>
            <div align="center">

          <h2  > Vehicle Rental Management System </h2> 
          
          <form method="post" action="Controller/Checkuser.php" onsubmit="return validateForm()"> 
          
          
             <b> <label for="username"> UserName : </label> </b>
               <input type="text" name="username" value="" >
               <!-- //<span class="error"> * <?php echo $usernameErr; ?> </span> -->
               <br><br>
              
                <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="" >
                <!-- <span class="error"> * <?php echo $passwordErr;?></span> -->
                <br><br>
                
             <div>
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>

                <input type="submit" name="submit" value="Submit"   > 
                <br>
                <br>
                
                <a href="Forgetpass.php">Forgot Password?</a><br>
 
             </div>
             </div>
        
         </form> <br>
           
          <hr>
           <?php
            include "Footer.php";
            ?>
         </fieldset>
     
    </body>
  
</html>