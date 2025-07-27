<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

label {
  font-size: 18px;
  margin-bottom: 10px;
}

select {
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 20px;
}

.sub {
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
<a href="main.php"><button class="btn"><-</button></a>
<form action="quizprocess.php" method="POST">
  <label for="languages">Select a languages:</label>
  <select name="languages" id="languages">
    <option value="HTML"><a href="">HTML</a></option>
    <option value="CSS"><a href="">CSS</a></option>
    <option value="PHP"><a href="">PHP</a></option>
    <option value="Javascript"><a href="JSquiz.php">Javascript</a></option>
    <option value="Python"><a href="Pythonquiz.php">Python</a></option>
    <option value="Java"><a href="Javaquiz.php">Java</a></option>
  </select>
  <button type="submit"class="sub">TAKE QUIZZES</button>
</form>
</body>
</html>