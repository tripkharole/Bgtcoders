<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin_Dashboard.css">
    <title>Admin Dashboard</title>
</head>
<body>
   

    <style>
body {
  font-family: "Poppins", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {padding: 15px 15px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.image{
  display:block;
  margin-left:auto;
  margin-right:auto;

}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="AdminProfile.png" alt="Admin Photo" class="image" width="150" height="150">
  <a href="QuizeManagement.php">Quize Management</a>
  <a href="UserIndex.php">User Management</a>
  <a href="FeedbackIndex.php">User Feedback</a>
  <a href="Admin_logout.php">Logout</a>

</div>
<header>
<nav>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <B style="color: white;" >BGT</B> <B style="color: white;" >Coders</B></span>
    </nav>
    </header>
    <main>
    <section>
          <h2 class="heading">Dashboard</h2>
          <div class="cards">
            <div class="card">
              <h3><a href="UserIndex.php "; style="text-decoration:none; color:black;">User Manage</a></h3>
              <p>0</p>
            </div>
            <div class="card">
              <h3><a href="QuizeManagement.php"; style="text-decoration:none; color:black;">Quiz Manage</a></h3>
              <p>120</p>
            </div>
            <div class="card">
              <h3><a href="FeedbackIndex.php"; style="text-decoration:none; color:black;">Feedback</a></h3>
              <p>0</p>
            </div>
           
          </div>
        </section>
    </main>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>