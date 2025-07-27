<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: indexes.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="loginpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginpage.css">
    <style>
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
<h2>LOGIN HERE</h2>
<?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "config.php";
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if($password === $user["password"]) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location:indexes.php");
                    die();
                }else{
                    echo "Password does not match";
                }
            }else{
                echo "Email does not match";
            }
        }
        ?>
            <form method="POST" action="">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="signup-btn" name="login">Login</button>
            </form>
            <br>
            <a href="forgot.php"> forgot password</a>
            <br>
            <p> You have not registered <a href="signup.php"> Sign up</a></p>
        </div>
    </div>
  
</body>
</html>