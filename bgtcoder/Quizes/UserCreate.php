<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table_Edit.css">
    <title>Add New User</title>
</head>
<body>
    <div class="container">
    <header class="content">
            <h1>Add New User</h1>
            <div>
            <a href="UserIndex.php" class="back">Back</a>
            </div>
        </header>
        <form action="Userprocess.php" method="post">
            <div class="element">
                <input type="text" class="form-control" name="fullname" placeholder="User Name">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="email" placeholder=" User Email">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="password" placeholder="User Password">
            </div>
            <div class="element">
                <input type="submit" name="create" value="Add User" class="btn ">
            </div>
        </form>
    </div>
</body>
</html>
