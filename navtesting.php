<!Doctype html>
<head>
<title>
  Bharat Hacks
</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

   <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script src="js/app.js"></script>
</head>
<body style="background: linear-gradient(45deg, black,#5C6BC0);background-repeat:no-repeat;overflow-x:hidden;">


    
    
  
      
    <nav class="navbar navbar-default navbar-fixed-top" style="background: lightgray;" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
        <a class="navbar-brand" href="navtesting.php" style="font-size: 30px " >Swachh Bharat</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
      <ul class="nav navbar-nav navbar-right">
          <li><a href="sign_up.php">Sign Up  <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
          <li><a href="log_in.php">Login  <i class="fa fa-user" aria-hidden="true"></i></a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
      
        
      
      <div class="row">
          <div class="col s12 "></div>
      </div>
      <div style="opacity:0.8">
  <div class="row">
    <div class="col s12 card aboutus" style="background-color:transparent" >
      <h2 class="card-title" style="color:white">About Us</h2>
      <p class="card-content">This Website is here to help you out with cleanliness and other problems that streets of India are facing.
        Just you need to register with us and be a part of 'Swach Bharat Abhiyan' Initiated By Honourable Prime Minister 'Mr Narendra Modi'.
        This Website contains two portals User and Employee Portal.
      </p>
      </div>
      <div class="row" style="margin-left:15%">
      <div class="col s4 card" style="background-color:skyblue;font-size:25px">
          <p> user:-They can Register their complaints By simply log in to our portal and submit their complaints.</p>
      </div>
      <div class="col s4 card" style="background-color:#9FA8DA;margin-left:11%;font-size:25px">
          <p> employee:-They can see complaints submitted by users of their area and can work on the solutions.</p>
      </div>
    
      </div>
  
</div>
      </div>

<!--Carousel Wrapper-->
<div>
  <ul id="slide-out" class="side-nav">
   <li><div class="userView">
     <a href="#!user"><img class="circle" style="height: 120px ;width: 120px;" src="img\logo.jpg"></a>
     <a href="#!name"><span class="white-text name">John Doe</span></a>
     <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
   </div></li>
   <li style="color:black ;margin-left:35px; font-size: 30px">Swachh Bharat</li>
   <li><a href="index.php"><i class="material-icons">cloud</i>Home</a></li>
   <li><a href="#!">Contact Us</a></li>
   <li><div class="divider"></div></li>
   <li><a class="waves-effect" href="sign_up.php" >Sign Up</a></li>
   <li><a class="waves-effect" href="log_in.php">Log In</a></li>
 </ul>
  </div>
  <div class="row card" >
    <div class="col s6" style="background-color:skyblue">
      <h2 class="card-title">Contact Us</h2>
      <form >
      <div class="input-field col s6" style="color:white">
          <input id="first_name" type="text" class="validate" name="t1" required>
          <label for="first_name" style="color:white">First Name</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="t2" required>
          <label for="last_name" style="color:white">Last Name</label>
        </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="t3" required>
          <label for="email" style="color:white">Email</label>
        </div>
      </div>
      <div class="row">
          <input type="submit" name="b1" class="btn" />
      </div>
    </form>
  </div>
      <div class="col s6" style="background-color:#9FA8DA">
  <h2 class="card-title">Follow Us On</h2>
  <div class="row">
      
  <div class="col s12" style="margin-top:23.5%">
    <a href=""><img src="img\facebook.png" style="padding-left:2%"></a>
    <a href=""><img src="img\instagram.png" style="padding-left:2%"></a>

  </div>
</div>
      </div>
      
</div>
</div>
<?php
if(isset($_REQUEST["b1"]))
{
    $fn=$_REQUEST["t1"];
    $ln=$_REQUEST["t2"];
    $e=$_REQUEST["t3"];
     $db=mysql_connect("localhost","root","");
 mysql_select_db("dbbharathacks",$db);
 $q="insert into tbcontactus(fname,lname,email)values('$fn','$ln','$e')";
 mysql_query($q);
}
?>
</body>
</html>
