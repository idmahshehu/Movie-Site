<?php
session_start();
include "db.php";

if(isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if(empty($uname)){
    echo "<script>alert('Incorrect User Name!'); window.location.href='register.php';</script>";
}
else if(empty($pass)){
    echo "<script>alert('Incorrect Password!'); window.location.href='register.php';</script>";
}

$sql = "SELECT * FROM users WHERE user_name='$uname' and password = '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)=== 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] == $uname && $row['password'] == $pass){
        echo "Logged in!";
        $_SESSION['user_name']= $row['user_name'];
        $_SESSION['name']= $row['name'];
        header("Location: home.php");
        exit();

    }
    else{
        echo "<script>alert('Incorrect User Name or Password!'); window.location.href='register.php';</script>";
    }
}
else{
    echo "<script>alert('Incorrect User Name or Password!'); window.location.href='register.php';</script>";
}