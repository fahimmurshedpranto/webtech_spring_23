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
    <title>Homepage</title>
</head>
<body>
    <fieldset>
    <?php
    include "NavBar.php";
    ?>

    <div>
        <p>
        
        <div align="center">
        <fieldset>
            <h1 style="font-size:6vw;">Welcome To</h1>
            <i><h1 style="font-size:5vw;">Vehicle Rental Management System</h1></i>
        </fieldset>
        </div>
        </p><br><br>
        <hr>
    </div>

    <?php
    include "Footer.php";
    ?> 
</fieldset>
</body>
</html>