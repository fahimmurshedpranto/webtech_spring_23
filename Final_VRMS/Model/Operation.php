<?php
  require_once 'Connection.php';

  function adduser($data){
    $conn = db_conn();
    $selectQuery = "INSERT into store (Name,Email,U_name,Gender,Pass,dob)
VALUES (:name, :email, :un,:gender,:pass,:dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':un' => $data['un'],
            ':gender'=> $data['gender'],
            ':pass'=> $data['pass'],
            ':dob'=> $data['dob']
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


  function addstore($data){
    $conn = db_conn();
    $selectQuery = "INSERT into createstore (storeName,storeID,BranchName,StoreLocation,StoreType,PreDate)
VALUES (:storename, :storeid, :branchname,:storelocation,:storetype,:predate)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':storename' => $data['storename'],
            ':storeid' => $data['storeid'],
            ':branchname' => $data['branchname'],
            ':storelocation'=> $data['storelocation'],
            ':storetype'=> $data['storetype'],
            ':predate'=> $data['predate']
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function checkuser($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE U_name LIKE '%$data%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($rows>1)
    return true;
    else
    return false;
}

function checkpass($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE Pass = '$data'";

    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($rows) > 0) {
        return true;
    } else {
        return false;
    }
}


function Searchuser($user)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE U_name LIKE '%$user%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function updateuser($name, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE store set Name = ?, Email = ?,Gender=? where  U_name= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'],$data['gender'] ,$name
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatepass($user,$data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE store set Pass=? where  U_name= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['pass'], $user
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


/*function ShowAllStore(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `createstore` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}*/

function ShowStore($storeName){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `createstore` where storeName= ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

?>