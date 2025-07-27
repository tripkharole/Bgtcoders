<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTER PAGE</title>
    <style>
        body{
            line-height:1.5;
            font-familiy:'Ubuntu',sans-serif;
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
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
    


    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h2>BGT CODER</h2>
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
                        <li><a href="http://localhost/bgtcoder/quiz.php#">Quiz</a></li><br>
                        <li><a href=""></a> About</li><br>
                        <li> <a href="">Our team</a></li>
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
                            <a href="https://www.instagram.com/"> <img src="instagram.png" alt="@instagram" height=20px width=25px></a>
                            <a href="https://www.facebook.com/kuldeep.harinkhede.94"> <img src="facebook.png" alt="@facebook" height=20px width=25px></a>
                            <a href="https://twitter.com/home?lan"> <img src="twitter.png" alt="@twitter" height=20px width=20px></a>
                            <a href="https://www.youtube.com/channel/UCM4jmfVoRCZ3EZqcG8j2RDQ"> <img src="youtube.png" alt="@youtube" height=20px width=20px></a>
                        </div>
                        </div>
                        </div>
                        <div class="sub">
                            <h5><center> @Copyright group 4 GPC BALAGHAT</center></h5>
                        </div>
    </footer>
</body>
</html>














