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
	<title> Create Store </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
  <script>
function validateForm() {
  var storename = document.forms["myForm"]["storename"].value;
  var storeid = document.forms["myForm"]["storeid"].value;
  var branchname = document.forms["myForm"]["branchname"].value;
  var storelocation = document.forms["myForm"]["storelocation"].value;
  var storetype = document.forms["myForm"]["storetype"].value;
  var predate = document.forms["myForm"]["predate"].value;
  if (storename == "" || storeid == "" || branchname == "" || storelocation == "" || storetype == "" || predate == "") {
    alert("All fields must be filled out");
    return false;
  }
}
</script>

  <div class="container" style="width:500px;">  
                <h1 align="center"> <b>Create Trip</b></h1><br />                 
                <form action="Controller/Addstore.php" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">

                   
                     <br />  
                     <label>Trip Name</label>  
                     <input type="text" name="storename" class="form-control" /><br />  
                     <label>Trip ID</label>
                     <input type="text" name = "storeid" class="form-control"  /><br />
                     <label>Branch Name</label>
                     <input type="text" name = "branchname" class="form-control"  /><br />
                     <label>Trip Location</label>
                     <input type="text" name = "storelocation" class="form-control" /><br />

                    <fieldset>
                    <legend>Trip Type</legend>
                    <input type="radio" id="Solo Trip" name="storetype" value="Solo Trip">
                     <label for="Solo Trip">Solo Trip</label>     <br>                
                     <input type="radio" id="Family Trip" name="storetype" value="Family Trip">
                     <label for="Family Trip">Family Trip</label> <br>
                     <input type="radio" id="other" name="storetype" value="other">
                     <label for="other">Other</label><br>

                     <legend>Trip Schedule</legend>
                     <input type="date" name="predate"> <br><br>

                     <div>
         <hr>
         <input type="submit" name="submit" value="Click Here To Create Trip !!" class="btn btn-info" /><br /> 
       </div>
                    </fieldset> 
                </form>
            </div>
        </div>
    </fieldset>
</body>
</html>