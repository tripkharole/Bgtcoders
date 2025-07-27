<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "Table_Index.css">
    <title>QUIZ LIST</title>
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
            <h1>QUIZ LIST</h1>
            <div>
                <a href="add.php" class="btn btn-primary">Add New Quiz</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Questions</th>
                <th>option1</th>
                <th>option2</th>
                <th>option3</th>
                <th>option4</th>
                <th>Correct ans</th>
                <th>Languages</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connection.php');
        $sqlSelect = "SELECT * FROM  quiz";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['question_id']; ?></td>
                <td><?php echo $data['questions']; ?></td>
                <td><?php echo $data['option1']; ?></td>
                <td><?php echo $data['option2']; ?></td>
                <td><?php echo $data['option3']; ?></td>
                <td><?php echo $data['option4']; ?></td>
                <td><?php echo $data['correct_ans_id']; ?></td>
                <td><?php echo $data['languages']; ?></td>
                <td>
                    <button><a href="QuizEdit.php?question_id=<?php echo $data['question_id']; ?>" class="btn ">Edit</a></button>
</td>
<td>
    <button>
                    <a href="QuizDelete.php?question_id=<?php echo $data['question_id']; ?>" class="btn ">Delete</a>
                    </button>
                    </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>