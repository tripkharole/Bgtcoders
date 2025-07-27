<?php
include('connection.php');
if (isset($_POST["create"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email= mysqli_real_escape_string($conn, $_POST["email"]);
    $password= mysqli_real_escape_string($conn, $_POST["password"]);

    $sqlInsert = "INSERT INTO user(fullname,email,password) VALUES ('$fullname','$email','$password')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "User Added Successfully!";
        header("Location:UserIndex.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password= mysqli_real_escape_string($conn, $_POST["password"]);

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE user SET fullname = '$fullname', email = '$email',password='$password' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "User Updated Successfully!";
        header("Location:UserIndex.php");
    }else{
        die("Something went wrong");
    }
}
?>