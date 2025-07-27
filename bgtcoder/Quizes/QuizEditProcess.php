<?php
include('connection.php');
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["question_id"]);
    $questions = mysqli_real_escape_string($conn, $_POST["questions"]);
    $option1= mysqli_real_escape_string($conn, $_POST["option1"]);
    $option2 = mysqli_real_escape_string($conn, $_POST["option2"]);
    $option3 = mysqli_real_escape_string($conn, $_POST["option3"]);
    $option4= mysqli_real_escape_string($conn, $_POST["option4"]);
    $correct_ans_id = mysqli_real_escape_string($conn, $_POST["correct_ans_id"]);
    $languages= mysqli_real_escape_string($conn, $_POST["languages"]);


    $id = mysqli_real_escape_string($conn, $_POST["question_id"]);
    $sqlUpdate = "UPDATE quiz SET questions = '$questions', option1 = '$option1',option2='$option2',option3 = '$option3',option4 = '$option4',correct_ans_id = '$correct_ans_id',languages = '$languages' WHERE question_id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Quiz Updated Successfully!";
        header("Location:QuizeManagement.php");
    }else{
        die("Something went wrong");
    }
}
?>