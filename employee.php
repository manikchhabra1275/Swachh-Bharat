<html>
<head>
   
<title>
  Bharat Hacks
</title>
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
<body height="100%" style="margin-left:10px; background: linear-gradient(45deg, black,#5C6BC0);background-size:cover; overflow-x:hidden">
  <div class="container " style="color:white;">
  <div class="row">
    <div class="col s3">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons animated bounceInLeft">menu</i></a>
  </div>
  <div class="col s9">
    <h2  >Employee Registration Portal</h2>
</div>
</div>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s3">
            <input id="first_name" type="text" name="t1" class="validate" required="">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s3">
            <input id="last_name" type="text" name="t2" class="validate" required="">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <input id="password" type="password" name="t3" class="validate" required="">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <input id="email" type="email" name="t4" class="validate" required="">
          <label for="email">Email</label>
        </div>
      </div>
      
    <div class="row">
      <div class="input-field col s6">
          <input id="password" type="password" name="t6" class="validate" required="">
        <label for="password">Secret Id</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
          <input id="password" type="text" name="t7" class="validate" required="">
        <label>Area Id</label>
      </div>
    </div>
    <div class="row">    
   <input  type="submit" class="btn" name="b1" />
    </div>
    </form>
    <div>
        <ul id="slide-out" class="side-nav">
   <li><div class="userView">
     <a href="#!user"><img class="circle" style="height: 120px ;width: 120px;" src="img\logo.jpg"></a>
     <a href="#!name"><span class="white-text name">John Doe</span></a>
     <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
   </div></li>
   <li style="color:black ;margin-left:35px; font-size: 30px">Swachh Bharat</li>
         <li><a href="index.php"><i class="material-icons">cloud</i>Home</a></li>
         <li><a href="#!">  Contact Us</a></li>
         <li><div class="divider"></div></li>
         <li><a class="waves-effect" href="sign_up.php">Sign Up</a></li>
         <li><a class="waves-effect" href="log_in.php">Log In</a></li>
       </ul>
        </div>


</div>
    <?php
    if(isset($_REQUEST["b1"]))
    {
        $db=mysql_connect("localhost","root","");
        mysql_select_db("dbbharathacks",$db);
        $fn=$_REQUEST["t1"];
        $ln=$_REQUEST["t2"];
        $p=$_REQUEST["t3"];
        $e=$_REQUEST["t4"];
        $i=$_FILES["t5"]["name"];
        $sid=$_REQUEST["t6"];
        $aid=$_REQUEST["t7"];
        $q="select * from tbemployee where fname='$fn' and lname='$ln' and email='$e' and secret_id=$sid ";
            $result=mysql_query($q);
            if(mysql_num_rows($result)>0)
            {
                $message = "employee already exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
            $message = "successfully registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
            copy($_FILES["t5"]["tmp_name"],"images/$i");
            $q="insert into tbemployee(fname,lname,password,email,image,secret_id,area_id)values('$fn','$ln','$p','$e','$i',$sid,$aid)";
            mysql_query($q);
            }
            ?>
        <script>
            location.href='log_in_employee.php';
            </script>
            <?php
            
        }
        ?>
</body>
