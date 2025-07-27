<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="signuppage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signuppage.css">
    <style>
        .alert-success{
            background:red;
            color:#fff;
            
        }
        a{
      color:black;
      text-decoration:none;
      font-weight:bold;
      font-size:16px;  
    }
    .home{
            margin-top:5%;
            background-color:#0a5057;
color:#fff;
padding: 10px 20px;
border:none;
cursor: pointer;
margin-left:2%;
}
    </style>
</head>
<body>
<div class= "popup-container" id="signup-popup">
<img src="avatar.png" class="avatar">

<div class= "register popup">
<a class="home" href="index.php">Back</a>

<h2>SIGNUP HERE</h2>
<?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "config.php";
           $sql = "SELECT * FROM user WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO user (fullname, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $password);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                header("Location:login.php");
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
            <form method="POST">
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Confirm Password"name="repeat_password">
                <button type="submit" class="signup-btn" name="submit">SIGNUP</button>
            </form>
            <p>you have already registered<a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>