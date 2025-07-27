<?php  include 'connection.php';
if(isset($_POST['submit'])){
	$question_id = $_POST['question_id'];
	$questions = $_POST['questions'];
	$correct_ans_id = $_POST['correct_ans_id'];
	$languages=$_POST['languages'];
	// Choice Array
	// $option = array(" "," "," "," ");
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4= $_POST['option4'];
 // First Query for Questions Table

	$query = "INSERT INTO quiz (";
	$query .= "question_id, questions,option1,option2,option3,option4,correct_ans_id,languages )";
	$query .= "VALUES (";
	$query .= " '{$question_id}','{$questions}','{$option1}' ,'{$option2}','{$option3}','{$option4}','{$correct_ans_id}','{$languages}'";
	$query .= ")";

	// $result = mysqli_query($conn,$query);
	if(mysqli_query($conn,$query)){
       echo "New question added successfully!";
    }else{
        die("Something went wrong");
    }
}
		$query = "SELECT * FROM quiz";
		$quiz = mysqli_query($conn,$query);
		$total = mysqli_num_rows($quiz);
		$next = $total+1;
?>
<html>
<head>
	<title> Quizer</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style>
		form {
  width: 60%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

label {
  display: inline-block;
  width: 150px;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="number"],
input[type="text"],
textarea {
  padding: 8px;
  width: 80%;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 16px;
  margin-bottom: 15px;
}

textarea {
  resize: vertical;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 20px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

select {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 16px;
  margin-bottom: 15px;
  width: 20%;
}

	</style>
</head>
<body>
<center align="center">
	<header>
		<div class="container">
			<p> Quizer</p>
		</div>
	</header>
	<main>
			<div class="container">
				<h2>Add A Question</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>		
				<form method="POST" action="add.php">
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_id" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label>Question Text:</label>
							<textarea cols="101" rows="15" type="text" name="questions"></textarea required>
						</p>
						<p>
							<label>Choice 1:</label>
							<input type="text" name="option1" required>
						</p>
						<p>
							<label>Choice 2:</label>
							<input type="text" name="option2" required>
						</p>
						<p>
							<label>Choice 3:</label>
							<input type="text" name="option3" required>
						</p>
						<p>
							<label>Choice 4:</label>
							<input type="text" name="option4" required>
						</p>
						<p>
							<label>Correct Option Number</label>
							<input type="number" name="correct_ans_id" required>
						</p>
						<div>
                <select name="languages">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                    <option value="Javascript">Javascript</option>
					<option value="Python">Python</option>
					<option value="Java">Java</option>
                </select>
            </div>
			<br><br>	
						<input type="submit" name="submit" value ="submit">
				</form>
			</div>
	</main>
	</center>
</body>
</html>