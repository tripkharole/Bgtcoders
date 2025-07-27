<?php
if (isset($_GET['id'])) {
include("connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "User Removed Successfully!";
    header("Location:UserIndex.php");
}else{
    die("Something went wrong");
}
}else{
    echo "User does not exist";
}
?>