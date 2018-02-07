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
<body style="background: linear-gradient(45deg, black,#5C6BC0);background-size:cover; overflow-x:hidden">
    
  <div class="container">
      
    <div class="row">
    <div class="col s6">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons animated bounceInLeft">menu</i></a>
  </div>
    <div class="col s6" style="margin-left:8%">    
   <h2 color="black">Complaint Registration Form</h2>  
    </div>   
</div>
     
      <a color="black" href="complaint_history.php">See ur Complaints History</a>

    <p>Click the button to get your coordinates.</p>
    <button class="btn btn-danger" onclick="getLocation()">Get your Location</button>

    <form >
<div class="row">
    <div class="input-field col s8" style="color:white">
        <textarea id="textarea1" class="materialize-textarea" name="t1" required></textarea>
            <label for="textarea1">Complaint</label>
          </div>

</div>
    

 
     <div class="row">
        <div class="input-field col s6">
            <input placeholder="Latitude" id="demo" name="t3" type="text" class="validate" required>
          
        </div>
     </div>
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="Longitude" id="demo1" name="t4" type="text" class="validate" required>
        </div>
     </div>   
    <div class="row">
        <div class="input-field col s6">
            <input  name="t5" type="text" class="validate" required>
          <label for="">Location Name</label>
        </div>
     </div>
    <div class="row">
        <input type="submit" class="btn" name="b1" />
    </div>
</form>
</div>

<div>
  <ul id="slide-out" class="side-nav">
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
    
    
    <?php
    
    
if(isset($_REQUEST["b1"]))
{
    session_start();
    
   $c=$_REQUEST["t1"];
   $lat=$_REQUEST["t3"]; 
   $lng=$_REQUEST["t4"];
   $n=$_REQUEST["t5"];
   
   $e=$_SESSION["email"];
   $db=mysql_connect("localhost","root","");
   mysql_select_db("dbbharathacks",$db);

     
            $q1="insert into tbmap(email,complaint,name,latitude,longitude,status)values('$e','$c','$n',$lat,$lng,0)";
            mysql_query($q1);
          
            include 'class.smtp.php';
            include 'class.phpmailer.php';
            
            
            $mail = new PHPMailer();
            $mail -> IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";            
            $mail -> Port=465;
            $mail ->isHTML(true);
            $mail ->Username = "manikchhabra1275@gmail.com";
            $mail ->Password = "manik1275";
            $mail ->SetFrom("manikchhabra1275@gmail.com");
            $mail->Subject="Swach Bharat";
 
            $mail->AddAddress($e);
            $m="Thanks";
            $mail->Body=$m;
            if($mail->Send()){
                header('Location:complaint_history.php');
            }
            
}  
?>

<script>
var x = document.getElementById("demo");
var y = document.getElementById("demo1");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.value =  position.coords.latitude ;
    y.value=position.coords.longitude;
}
</script>

</body>
