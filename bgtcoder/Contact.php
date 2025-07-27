<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="home.css">
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
  <a href="http://localhost/bgtcoder/about.php">ABOUT US</a>
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
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt">  <img src="call.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Phone:</span> <a href="+917804984824">+917804984824</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"> <img src="gmail.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Email:</span> <a href="kuldeepharinkhede512@gmail.com">kuldeep@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"> <img src="web.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Website:</span> <a href="bgtcoders.in">bgtcoders.in</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/"><i class="fab fa-facebook"> <img src="instagram 2.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
                    <li><a href="https://www.facebook.com/kuldeep.harinkhede.94"><i class="fab fa-twitter"> <img src="facebook 2.png" alt="@instagram" height=30px width=30px align="center"></i></a></li>
                    <li><a href="https://twitter.com/home?lan"><i class="fab fa-linkedin-in"> <img src="twitter.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/kuldeepharinkhede-53603521b/?originalSubdomain=in"><i class="fab fa-linkedin-in"> <img src="linkedin.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
               
                </ul>
            </div>
            <div class="form-wrap">
                <form action="contactdata.php" method="POST">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text"  name="fname"class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="lname"class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea  type="text"name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button" name="submit">
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>