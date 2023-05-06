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
  <title> My Profile </title>
</head>
<body>
  <fieldset>
    <div>  
                <p><h1 align="center">
           <span style="color:indianred"> Vehicle Rental Management System </span>
           </h1>
        </p>
       <h3 align= "right">
        <span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["Name"]?> </span>
       <span><a style="color:purple;" href="Homepage.php"> | Logout </a></span>
           </h3>
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
        
  </fieldset>
  </div>
         
        
  <script type="text/javascript">
  function validateForm() {
    var name = document.forms["editForm"]["name"].value;
    var email = document.forms["editForm"]["email"].value;
    var gender = document.forms["editForm"]["gender"].value;
    if (name == "" && email == "" && gender == "") {
      alert("Please fill out all fields.");
      return false;
    }
  }
</script>
  
       

    
      
      
          <fieldset>
          <form method="post" action="Controller/Edit.php" name="editForm" onsubmit="return validateForm()">

          <fieldset>
          
               <legend align="center"><h1> EDIT PROFILE </h1></legend>
               <p align="center">
          
               <b> <p align="center" <label for="name"> Name : </label> </b> 
               <input type="text" name="name" value=""> 
               
               <hr>
              
                <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="">
                
                <hr>

                <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other  
               
                <hr>
          
                
    
 
                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
                  <hr>

                 </p>
                 
                  <?php
                  include "Footer.php";
                  ?> 
                </fieldset>
                </form> <br>

               

    </body>
</fieldset>
</html>