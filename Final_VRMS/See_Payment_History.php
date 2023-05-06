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
	<title> See Payment History </title>
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
		   <span><a style="color:purple;" href="Login.php"> | Logout </a></span>
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

      <div>
            <fieldset>
            <br>
            <br>
           <div align="center">
           <table border="3">
  <thead>
    <tr>
      <th>Trip</th>
      <th>Date</th>
      <th>Rent</th>
      <th>Passenger</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dhaka To Khulna </td>
      <td>2023-05-15</td>
      <td>$10.99</td>
      <td>2</td>
      <td>$21.98</td>
    </tr>
    <tr>
      <td>Dhaka To Rangpur</td>
      <td>2023-07-07</td>
      <td>$8.99</td>
      <td>1</td>
      <td>$8.99</td>
    </tr>
    <tr>
      <td>Dhaka To Rajshahi</td>
      <td>2023-05-22</td>
      <td>$11.99</td>
      <td>3</td>
      <td>$35.97</td>
    </tr>
    <tr>
      <td>Dhaka To Sylhet</td>
      <td>2022-05-25</td>
      <td>$14.99</td>
      <td>1</td>
      <td>$14.99</td>
    </tr>
    
  </tbody>
</table>

</div>


            </fieldset>

            </div>
    <?php
    include "Footer.php";
    ?> 
    </fieldset>   
</body>
</html>