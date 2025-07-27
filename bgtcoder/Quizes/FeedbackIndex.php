<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table_Index.css">
    <title>User List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="head">
            <h1>User List</h1>
        </header>
        
        <table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>

            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connection.php');
        $sqlSelect = "SELECT * FROM contact";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['firstname']; ?></td>
                <td><?php echo $data['lastname']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phonenumber']; ?></td>
                <td><?php echo $data['message']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>