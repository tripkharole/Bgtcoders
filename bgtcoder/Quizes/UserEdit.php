<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table_Edit.css">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
    <header class="content">
            <h1>Edit User</h1>
            <div>
            <a href="UserIndex.php" class="back">Back</a>
            </div>
        </header>
        <form action="Userprocess.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connection.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="element">
                <input type="text" class="form-control" name="fullname" placeholder=" Full name" value="<?php echo $row["fullname"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $row["password"]; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="element">
                <input type="submit" name="edit" value="Edit User" class="btn">
            </div>
                <?php
            }else{
                echo "<h3>User Does Not Exist</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>