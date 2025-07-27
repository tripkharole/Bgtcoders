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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="popup-container" id="signup-popup">
        <img src="avatar.png" alt="" class="avatar">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "config.php";
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <div class="register popup">
            <h2>LOGIN HERE</h2>
      <form action="login.php" method="post">
            <input type="email" placeholder="Enter Email:" name="email">
            <input type="password" placeholder="Enter Password:" name="password">
           <button type="submit" value="Login" name="login"> login </button>
      </form>
     <p>Not registered yet <a href="signup.php">Register Here</a></p></div>

</body>
</html>