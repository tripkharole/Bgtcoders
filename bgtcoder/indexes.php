<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            margin:0;
            padding:20px;
            background-color:#f8f8f8;
        }
        .home{
            margin-top:5%;
            background-color:#007bff;
color:#fff;
padding: 10px 20px;
border:none;
cursor: pointer;
margin-left:2%;
        }
        h1{
            font-size:35px;
            color:#0a5071;
            margin-bottom:20px;
        }
        .userinfo{
            margin-top:20px;
            border:3px solid red;
            padding: 20px;
            width: 400px;
            height: 400px;
            border-color:black;
            text-align:left;
            
        }
         
         p{
            font-size: 18px;
            color:black;
            margin:5px 0;
        }
        h4{
            margin-left:50%;
            font-size: 18px;
            color:black;
            margin:5px 0;
        }
        .logout-button{
            margin-top:20px;
            background-color:#007bff;
color:#fff;
padding: 10px 20px;
border:none;
cursor: pointer;

        }
        .user_details{
            color:#007bff;
            text-align:center;

        }
        
    </style>
</head>
<body>
    <!-- php code to retrieve user information from database -->
<?php
  // connect to the mysql database
  $mysqli = new mysqli("localhost", "root", "", "bgtcoders");

  // check the database connection
  if($mysqli->connect_error) {
    die("connection failed: " . $mysqli->connect_error);
  }

  // retrieve user information from the database
  $userid = 1; // replace with the actual user id of the logged-in user
  $query = "select fullname, email from user where id = ?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("i", $userid);
  $stmt->execute();
  $stmt->bind_result($fullname, $email);
  $stmt->fetch();
  $stmt->close();
  $mysqli->close();
?>
<a class="home" href="index.php">HOME</a>
<center>  
  <h1>WELCOME YOUR  USER DASHBOARD</h1>
  <div class="userinfo">
    <h2 class="user_details">USRE INFORMATION </h2>
    <br>
    <br>
    <p>Name: <?php echo $fullname; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <br>
    <br>
    <br>
    <h4>Settings</h4>
    <h4>Update Profile</h4>
    <br>
    <br>
    <br>
    <a href="logout.php" class="logout-button">LOGOUT</a>
    </div>
    </center>
</body>
</html>