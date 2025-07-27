<?php 
include 'connection.php';
$query = "SELECT * FROM quiz";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
?>
<html>
<head>
	<title> Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		/* Style for header */
header {
  background-color: #0a5071;
  color: #fff;
  padding: 10px;
}

header .container {
  display: flex;
  justify-content: center;
  align-items: center;
}

header p {
  margin: 0;
  font-size: 24px;
}

/* Style for main */
main {
  padding: 20px;
}

main .container {
  max-width: 800px;
  margin: 0 auto;
}

main h2 {
  font-size: 36px;
  margin-bottom: 20px;
  color: #0a5071;
  
}

main p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

main ul {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-bottom: 20px;
}

main li {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 10px;
}

main li strong {
  font-weight: bold;
}

main .start {
  display: inline-block;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 18px;
  text-decoration: none;
  margin-top: 20px;
}

main .start:hover {
  background-color: green;
}

	</style>
</head>
<body>
	
	<header>
		<div class="container">
			<p>Quizer</p>
		</div>
	</header>
	<main>
			<div class="container">
				<h2>Boost Your Coding Knowledge</h2>
				<p>
					These are the MCQ's!
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choice</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1; ?></li>
				</ul>
				<a href="quizform.php?n=1" class="start">Start Quize</a>
			</div>
	</main>
</body>
</html>