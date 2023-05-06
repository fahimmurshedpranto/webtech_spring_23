<?php  
session_start();
// Check if user is logged in
if (!isset($_SESSION['User']) ) {
header("Location: login.php");
exit();
}
require_once 'Controller/StoreInfo.php';

$products = fetchAllProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Store Name</th>
            <th>Branch Name</th>
            <th>Store Location</th>
            <th>Store Type</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($createstore as $i => $storeName): ?>
            <tr>
                <td><a href="../Show Store.php?id=<?php echo $user['storeName'] ?>"><?php echo $user['storeName'] ?></a></td>
                <td><?php echo $user['BranchName'] ?></td>
                <td><?php echo $user['StoreLocation'] ?></td>
                <td><?php echo $user['StoreType'] ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>