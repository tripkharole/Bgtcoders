<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table_Edit.css">
    <title>Edit Quiz</title>
</head>
<body>
    <div class="container">
    <header class="content">
            <h1>Edit Quiz</h1>
            <div>
            <a href="QuizeManagement.php" class="back">Back</a>
            </div>
        </header>
        <form action="QuizEditProcess.php" method="post">
            <?php 
            if (isset($_GET['question_id'])) {
                include("connection.php");
                $id = $_GET['question_id'];
                $sql = "SELECT * FROM quiz WHERE question_id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="element">
                <input type="text" class="form-control" name="question_id" placeholder=" S.No." value="<?php echo $row["question_id"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="questions" placeholder="Questions" value="<?php echo $row["questions"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="option1" placeholder="Option1" value="<?php echo $row["option1"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="option2" placeholder="Option2" value="<?php echo $row["option2"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="option3" placeholder="Option3" value="<?php echo $row["option3"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="option4" placeholder="Option4" value="<?php echo $row["option4"]; ?>">
            </div>
            <div class="element">
                <input type="text" class="form-control" name="correct_ans_id" placeholder="Correct Answer" value="<?php echo $row["correct_ans_id"]; ?>">
            </div>
            <div class="element">
                <select name="languages" class="form-control" value="<?php echo $row["languages"]; ?>">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                    <option value="Javascript">Javascript</option>
					<option value="Python">Python</option>
					<option value="Java">Java</option>
                </select>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="question_id">
            <div class="element">
                <input onclick="return confirm(' Are You Sure You Want To Update Quiz')"type="submit" name="edit" value="Edit Quiz" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3> Quizzes are not Available</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>