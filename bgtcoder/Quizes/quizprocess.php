<?php
// Connect to the database
include 'connection.php';
// Check if the form has been submitted
if (isset($_POST['submit'])) {
	// Initialize the score
	$score = 0;

	// Loop through each question
	foreach ($_POST['answer'] as $question_id => $answer_id) {
		// Get the correct answer ID from the database
		$query = "SELECT correct_ans_id FROM quiz WHERE question_id = " . $question_id;
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		$correct_ans_id = $row['correct_ans_id'];

		// Check if the answer is correct and update the score
		if ($answer_id == $correct_ans_id) {
			$score++;
		}	
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<style>
		*{
			font-family:'Poppins', sans-serif;
		}
		h1{
			color:#0a5071;
			text-align:center;
			
		}
		h4{
			color:#0a5071;
			text-align:center;
			

		}
		h2{
			color:#0a5071;
			margin-top:30px;
		}
		ul{
			list-style-type: none;
			margin:0;
			padding:0;
			margin-left:50px;
		}
		input[type="submit"]{
			background-color:#0a5071;
			color:white;
			padding:10px 20px;
			border:none;
			border-radius:5px;
			cursor:pointer;
			margin-top:20px;
			margin-bottom:30px;
			margin-left:50px;

		}
		button {
  background-color: #0a5071;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #005ea8;
}
	</style>
</head>
<body>
	<?php
	// Check if the form has been submitted and display the score
	if (isset($_POST['submit'])) {
		echo "<a href='http://localhost/bgtcoder/index.php'><button>BACK</button></a>";
		
		echo "<h1>Your Result</h1>";
		echo "<h4>Congratulations You have completed this quiz succesfully.</h4>";
		
		echo "<h1>Your Score: " . $score . "</h1>";
	
		
	} else {
		// If the form has not been submitted, display the quiz
		$languages=$_POST['languages'];
		$query = "SELECT * FROM quiz WHERE languages ='$languages'ORDER BY question_id ASC ";
		$result = mysqli_query($conn, $query);
		$question_id = 1;
	?>
	<a href="quizform.php"><button>BACK</button></a>
		<h1>Quizzes</h1>
		<form method="post">
			<?php
			// Loop through each question
			while ($row = mysqli_fetch_assoc($result)) {
				

				// Print the question and options
				echo "<h2 > Que:$question_id  " . $row['questions'] . "</h2>";
				echo "<ul>";
				echo "<li><input type='radio' required name='answer[" . $row['question_id'] . "]' value='1'>" . $row['option1'] . "</li>";
				echo "<li><input type='radio' required name='answer[" . $row['question_id'] . "]' value='2'>" . $row['option2'] . "</li>";
				echo "<li><input type='radio' required name='answer[" . $row['question_id'] . "]' value='3'>" . $row['option3'] . "</li>";
				echo "<li><input type='radio' required name='answer[" . $row['question_id'] . "]' value='4'>" . $row['option4'] . "</li>";
				echo "</ul>";

				$question_id++;
			}
			?>
			<input type="submit" name="submit" value="Submit">
		
		</form>
	<?php
	}
	?>
</body>
</html>