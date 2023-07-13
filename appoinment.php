<?php 
$host="localhost:127.0.0.1";
$user="root";
$password="";
$db="urgent_surviva";
 mysql_connect($host,$user,$password);
 mysql_select_db($db);
 if(isset(['Username'])){
  $uname=$_POST['Username'];
  $password=$_POST['password'];
  $sql="select * from login"
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>UrgentSurviva</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="appoinment.css"></link>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontaweasome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------------------------INLINE CSS------------------------------------------>
 



</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.html">HOME |</a>
          </li>
        
        <li class="nav-item">
          <a class="nav-link" href="NEEDSOFSURVIVA.html">NEEDS  </a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="PURPOSE.html">PURPOSE</a>
        </li-->
      </ul>
      <form class="d-flex">
        <div class="dropdown">
          
    <button type="button" class="btn btn-$green semi-transparet dropdown-toggle" data-bs-toggle="dropdown">
      CITIES
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="DISEASEKOLKATA.html">KOLKATA</a></li>
      <li><a class="dropdown-item" href="DISEASEDELHI.html">DELHI</a></li>
      <li><a class="dropdown-item" href="DISEASEMUMBAI.html">MUMBAI</a></li>
      <li><a class="dropdown-item" href="DISEASEBANGALORE.html">BANGALORE</a></li>
      <li><a class="dropdown-item" href="DISEASECHENNAI.html">CHENNAI</a></li>
      <li><a class="dropdown-item" href="DISEASEPUUNE.html">PUNE</a></li>
    </ul>
  </div>
</div>
          
       
      </form>
    </div>
  </div>
</nav>
            <img src="form6.jpg"  height="100%"width="100%" class="image">
            <form action="/action_page.php">
                
                <div class="formcontainer">
                    <h1>Login Form</h1>
                <hr/>
                <div class="container">
                  <label for="uname"><strong>Username</strong></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <label for="psw"><strong>Password</strong></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                </div>
                <button type="submit">Login</button>
                <div class="container" style="background-color: #eee">
                  <label style="padding-left: 15px">
                  <input type="checkbox"  checked="checked" name="remember"> Remember me
                  </label>
                  <span class="psw"><a href="#"> Forgot password?</a></span>
                </div>
              </form>
              
        </body>
</html>