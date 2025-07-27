<?php
  session_start();
  $loggedIn = false;
  if (isset($_SESSION['email'])) {
    $loggedIn = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="contact.css" >
    <link rel="stylesheet" href="about.css">
    <style>

        /* study section css*/
body{
    background-color: rgb(58, 58, 58);
    margin:0;-
    padding: auto;
}
.carousel-container {

  position:relative ;
  margin: 0 0;

}

.navigation-buttons .previous {
  position: absolute;
  z-index: 10;
  font-size: 25px;
  top: 60%;
  left: 10px;
  font-weight: 700;
}

.navigation-buttons .next {
  right: 10px;
  position: absolute;
  font-size: 25px;
  z-index: 10;
  top: 60%;
}

.navigation-buttons .nav-btn {
  background: rgba(255, 255, 255, 0.55);
  cursor: pointer;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
}

.navigation .nav-btn:hover {
  background: white;
  border-radius: 10px;
}

.slider-carousel {
  margin-top: 0;
  transition: all 0.1s ease;

}
.slider-carousel img {
  height: 540px;
  width: 1520px; ;
  transition: all 0.1s ease;
 filter: brightness(50%);
      
  

}

.images {
  position: relative;
  display: none;
}

.main {
  display: block;
}
.text {
  color: #ffffff;
  font-size: 60px;
  padding: 8px 12px;
  position: absolute;
  bottom: 20%;
  width: 100%;
  text-align: center; 
}


/* slider ki css*/

.html{
background-color:#D9EEE1!important;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.html h1{
    top: 30px;
    color:black;
    font-size: 100px;
}
.html h3{
    color:black;
    font-size:30px;

}
.css{
    background-color:black;
text-align:center;
border: 2px solid green;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.css h1{
    top: 30px;
    color:#fff;
    font-size: 100px;
}
.css h3{
    color:#fff;
    font-size:30px;
}
.js{
    background-color:#FFF4A3!important;
text-align:center;
border: 2px solid white;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.js h1{
    top: 30px;
    color:black!important;
    font-size: 100px;
}
.js h3{
    color:green;
    font-size:30px;
}
.PHP{
    background-color:#FFFFFF;
text-align:center;
border: 2px solid pink;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.PHP h1{
    top: 30px;
    color:black!important;
    font-size: 100px;
}
.PHP h3{
    color:green;
    font-size:30px;
}
.JAVA{
background-color: #55c0c0!important;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.JAVA h1{
    top: 30px;
    color:black!important;
    font-size: 100px;
}
.JAVA h3{
    color:#FFFF00;
    font-size:30px;
}
.PYTHON{
background-color: #00FFFF	;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.PYTHON h1{
    top: 30px;
    color:black!important;
    font-size: 100px;
}
.PYTHON h3{
    color:black;
    font-size:30px;
}
.SQL{
background-color: #ab414c!important;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.SQL h1{
    top: 30px;
    color:black!important;
    font-size: 100px;
}
.SQL h3{
    color:black;
    font-size:30px;
}
.C{
background-color: #461200;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.C h1{
    top: 30px;
    color:white!important;
    font-size: 100px;
}
.C h3{
    color:white;
    font-size:30px;
}
.CPLUS{
background-color: #8bc34a;
text-align:center;
border: 2px solid black;
  padding: 10px;
  border-radius: none;
  cursor: pointer;
}
.CPLUS h1{
    top: 30px;
    color:white!important;
    font-size: 100px;
}
.CPLUS h3{
    color:white;
    font-size:30px;
}
/* footer ki css*/

.footer{
            line-height:1.5;
            font-familiy:'Ubuntu',sans-serif;
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
          font-familiy:'Ubuntu',sans-serif;
            max-width: 2000px;
            margin:auto;
            max-height: 1200px;
        }
        .row{
            display: flex;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color:#28292b;
            padding:20px 0;
        }
        /* footer section start*/
        .footer-col{
            width: 25%;
            padding: 0 15px;
        }
        /*peragraph section start*/
        .footer-col p{
            font-size: 16px;
            color:#ebe5e5;
            margin: bottom 25px;
        }
.footer-col h4{
    font-size: 18px;
    color:#ffffff;
    margin-bottom: 35px;
    font-weight: 100px;
    position: relative;
}
.footer-col ul{
    color:#bbbbbb;
    cursor: pointer;
}
.footer-col ul li:hover{
    color: #ffffff;
padding-left: 10px;
}
/* first section*/

.footer-col h2{
font-size: 30px;
margin-bottom: 35px;
color:#ff7220;
}
.footer-col h3{
    font-size: 30px;
    color:#f3aa0b;
    float:left;
}
.footer-col h4::before{
    content:"";
    position: absolute;
    left: 0;
    bottom: -10px
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul a{
    font-size:16px;
    text-transform: capitalize;
    color:#ffffff;
    text-decoration:none;
    font-weight:300;
    color:#bbbbbb;
    display:block;
    transition: all 0.3s ease;
}
.footer-col ul a:hover{
color:#ffffff;
padding-left: 10px;
}
.footer-col.social-icons{
    margin:0;
    text-align:center;
}
.footer-col.social-icons img{
    width: 5px;
    margin: 0 0px;
    box-shadow:0 0 5px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 20%;
}
.sub h5{
    color: #ffffff;
}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color:rgb(185.181.179);
}
/* responsive*/
@media(max-width:575px){
    .footer-col{
        width: 100%;
        margin-bottom: 30px
    }
}
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
            <input type="search" name="query" placeholder="search here" action="search.php">
            <span class="fa fa-search">
                <img src="search icon.png" alt="" height=20px width=20px align="left">
            </span>
        </div>
        <ol>
           <li align="center"><a href="signup.php" >SIGNUP</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <br>
</ol>     
    </nav>
    <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="about.php">ABOUT US</a>
  <a href="Contact.php">CONTACT US</a>
  <div class="dropdown">
    <button class="dropbtn">TUTORIALS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="htmlintroduction.php">HTML</a>
        <a href="css_introduction.php">CSS</a>
      <a href="ph.php">PHP</a>
      <a href="js_introduction.php">JAVA SCRIPT</a>
      <a href="java_introduction.php">JAVA</a>
      <a href="python.php">PYTHON</a>
    </div> 
  </div> 
  <a href="Quizes/main.php">QUIZ</a>
</div>
<!--slider start-->
<div id="parent-container">

<div class="navigation-buttons">
  <div class="previous nav-btn"><</div>
  <div class="next nav-btn">></div>
</div>

<div class="slider-carousel">
  <div class="images main">
    <img src="1.jpg" alt="flower 1" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b>
    <br> 
</div>

    
  </div>
<div class="images">
    <img src="2.jpg" alt="flower 2" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b></div>
  </div>
  <div class="images">
    <img src="3.jpg" alt="flower 3" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b></div>

    
  </div>      
</div>

</div>
<!-- slider ki js-->
<script>

    const previous = document.querySelector('.previous');
    const next = document.querySelector('.next');
    const images = document.querySelector('.slider-carousel').children;
    const totalImages = images.length;
    let currentIndex = 0;


	// Event Listeners to previous and next buttons
    previous.addEventListener('click', () => {
      previousImage()
    })

    next.addEventListener('click', () => {
      nextImage();
    })
    
    setInterval(()=>{
    	nextImage();
    },2000);
    
    // Function to go to next Image
    function nextImage(){

      images[currentIndex].classList.remove('main');
    	if(currentIndex == totalImages-1){
        	currentIndex = 0;
        }
        else{
        	currentIndex++;
        }

      images[currentIndex].classList.add('main');
      
    }
    
    // Function to go to previous Image
    function previousImage(){

      images[currentIndex].classList.remove('main');
    	if(currentIndex == 0){
        	currentIndex = totalImages-1;
        }
        else{
        	currentIndex--;
        }
    
      images[currentIndex].classList.add('main');

    }  
</script>
<!-- section of study-->

    <section class="htm_section">
    <div class="html">
        <h1> HTML</h1>
        <br>
        <h3><p> HYPERTEXT MARKUP LANGUAGE</p> 
        <br>
        <p><a href="htmlintroduction.php">Learn more</a></p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="css">
        <a href="css.php "></a>
        <h1>CSS</h1>
        <br>
        <h3><p> CASCADING STYLESHEET</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="js">
        <a href="js.php"></a>
        <h1> JAVA SCRIPT</h1>
        <br>
        <h3><p> THIS IS SCRIPTING LANGUAGE</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="PHP">
        <a href=" ph.php"></a>
        <h1>PHP</h1>
        <br>
        <h3><p>HYPERTEXT PRE-PROCISSER</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="JAVA">
        <a href=" java.php"></a>
        <h1>JAVA</h1>
        <br>
        <h3><p>JAVA IS INETERPRETERD AND COMPILERERD</p> 
        <br>
        <p>Learn more</p>
        <br>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="PYTHON">
        <a href="python.php "></a>
        <h1>PYTHON</h1>
        <br>
        <h3><p> ANDVANCED AND LOGICAL PROGRAMING</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="SQL">
        <a href=" "></a>
        <h1>SQL</h1>
        <br>
        <h3><p>STRUCTURE QUERY LANGUAGE</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="C">
        <a href=" "></a>
        <h1>C </h1>
        <br>
        <h3><p>  C PROGRAMING</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
    <section>
    <div class="CPLUS">
        <a href=" "></a>
        <h1>C++</h1>
        <br>
        <h3><p> ANDVANCED AND LOGICAL PROGRAMING</p> 
        <br>
        <p>Learn more</p>
        </h3>
        </a>
    </div>
    </section>
   <!--about page start--> 
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
                        <a href="http://localhost/bgtcoder/html.php">Read more</a>
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
<!--conatact page start-->
<!--contact page start-->
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
    <!-- foter start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h2> BGT CODER</h2>
                    <ul>
                        <p> We are Student Government polytechnic college Balaghat we create this project for pogramming languages learning</p>
                        <br>
                        <br>
                        <br>
                        <h3> LOCATION</h3>
                        <br>
                        <br>
                        <br>
                        <br>
                        <UL><P> At and post Balaghat Dist. Balaghat(481001)</P></UL>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4> QUICK LINK</h4>
                    <ul>
                        <li><a href="index.php"> Home</a></li><br>
                        <li><a href="htmlintroduction.php">Tutorial </a></li><br>
                        <li><a href="http://localhost/bgtcoder/Contact.php"> Contact</a></li><br>
                        <li><a href="index.php">Quiz</a></li><br>
                        <li><a href="about.php"> About</a></li><br>
                        <li><a href=""> Our Team</a></li><br>

                      </ul>
                     </div>
                     <div class="footer-col">
                        <h4>OTHER LINK</h4>
                        <ul>
                            <li><a href=""> Privacy&Policy</a></li>
                            <br>
                            <li><a href=""> Terms&Conditions</a></li>
                      </ul>
                     </div>
                     <div class="footer-col">
                        <h4>USEFULL LINK</h4>
                        <div class="social-icon">
                            <a href="https://www.instagram.com/the_bgtcoders/"> <img src="instagram 2.png" alt="@instagram" height=20px width=30px></a>
                            <a href="https://www.facebook.com/kuldeep.harinkhede.94"> <img src="facebook 2.png" alt="@facebook" height=20px width=25px></a>
                            <a href="https://twitter.com/home?lan"> <img src="twitter.png" alt="@twitter" height=20px width=20px></a>
                            <a href="https://www.youtube.com/channel/UCM4jmfVoRCZ3EZqcG8j2RDQ"> <img src="youtube.png" alt="@youtube" height=20px width=20px></a>
                        </div>
                        </div>
                        </div>
                        <div class="sub">
                            <h5><center> <a href="http://localhost/bgtcoder/Quizes/AdminL.php"> @</a>Copyright group 4 GPC BALAGHAT</center></h5>
                        </div>
    </footer>
</body>
</html>