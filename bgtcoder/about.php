<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
      .navbar {
        overflow: hidden;
        background-color: #0a5071;
      }
      
      .navbar a {
        float: left;
        font-size: 20px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-family: inherit;
      }
        .dropdown {
            float: left;
            overflow: hidden;
          }
          
          .dropdown .dropbtn {
            font-size: 20px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
          }
          
          .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
          }
          
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          
          .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
          }
          
          .dropdown-content a:hover {
            background-color: #ddd;
          }
          
          .dropdown:hover .dropdown-content {
            display: block;
          }
    </style>

    <title>About us</title>
</head>
<body>
    <input type="checkbox" id="check">
    <nav>
        <div class="icon">BGT <B style="color: red;" >C</B>ODERS</div>
        <div class="search_box">
            <input type="search" placeholder="search here">
            <span class="fa fa-search">
                <img src="search icon.png" alt="" height=20px width=20px align="left">
            </span>
        </div>
        <ol>
            <li><a href="http://localhost/bgtcoder/signup.php" >SIGNUP</a></li>
            <li><a href="http://localhost/bgtcoder/login.php" id="loginuButton">LOGIN</a></li>


</ol>     
    </nav>
  <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="http://127.0.0.1:5500/about.html">ABOUT US</a>
  <a href="http://localhost/bgtcoder/Contact.php">CONTACT US</a>
  <div class="dropdown">
    <button class="dropbtn">TUTORIALS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="htmlintroduction.php">HTML</a>
        <a href="css.php">CSS</a>
      <a href="ph.php">PHP</a>
      <a href="js.php">JAVA SCRIPT</a>
      <a href="java.php">JAVA</a>
      <a href="python.php">PYTHON</a>

    </div>
  </div> 
  <a href="http://localhost/bgtcoder/Quizes/main.php">QUIZ</a>
</div>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About us</h1>
                </div>
                <div class="content">
                    <h3>The largest tutorials site of the internet.</h3>
                    <p> This is a e-learning platform it is providing  content of some programming languages in Hindi and English medium. Whether you are a complete beginner or experienced developer our website is hear to help you learn grow and excel in your coding journey. Our website offers a tutorial ,covering a variety of programming language with a focus practice question.
                        </p>
                    <div class="button">
                        <a href="html.php">Read more</a>
                    </div>
                </div>
                <div class="social">
                <a href="https://www.instagram.com/"><i class="fab fa-facebook"> <img src="instagram 2.png" alt="@instagram" height=30px width=25px align="center"></i></a>
                <a href="https://www.facebook.com/kuldeep.harinkhede.94"><i class="fab fa-twitter"> <img src="facebook 2.png" alt="@instagram" height=30px width=30px align="center"></i></a>
                <a href="https://twitter.com/home?lan"><i class="fab fa-linkedin-in"> <img src="twitter.png" alt="@instagram" height=30px width=25px align="center"></i></a>
                <a href="https://www.linkedin.com/in/kuldeepharinkhede-53603521b/?originalSubdomain=in"><i class="fab fa-linkedin-in"> <img src="linkedin.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>

                </div>
            </div>
            <div class="image-section">
                <img src="image-two.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>