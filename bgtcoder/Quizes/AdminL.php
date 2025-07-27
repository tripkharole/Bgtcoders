
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="AdminL.css">
</head>
<body>

    <div class="container">
        <div class="myform">
            <form method="POST">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Admin Id"name="email">
                <input type="text" placeholder="Password" name="password">
                <button type="submit" name="login">LOGIN</button>
            </form>

        </div>
        <div class="image">
            <img src="Admin_img.jpg">

        </div>
        <?php
        include('connection.php');

        if (isset($_POST['login'])) { //cheack - info. availabel or not with the help of isset function....
            $email= $_POST['email'];
            $password = $_POST['password'];

            if ($email== 'bgtcoders@gmail.com' && $password == 'bgt@1234') { //Predefined Admin ID and Password matching....
                header("Location:Admin_Dashboard.php"); //if match Admin ID and Password than access of mainpage....
                exit;
            } else { //Admin ID and Password not match...
                
                echo "<script>
                const errorBox = document.createElement('div');
                errorBox.classList.add('error-box');
                errorBox.innerHTML = '<p>  Please Try Again</p>';
                document.body.appendChild(errorBox);
            </script>";
            }
        }
        ?>
    </div>  
</body>
</html>