<?php
if (isset($_GET['question_id'])) {
include("connection.php");
$id = $_GET['question_id'];
$sql = "DELETE FROM quiz WHERE question_id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Quiz Removed Successfully!";
    header("Location:QuizeManagement.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Quiz does not exist";
}
?>