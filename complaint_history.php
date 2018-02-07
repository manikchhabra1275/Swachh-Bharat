<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

   <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script src="js/app.js"></script>
        
        <title></title>
    </head>
    <body   style=" padding-left: 20px; height:100%; background: linear-gradient(45deg, black,#5C6BC0);  overflow-x:hidden">
        <p style="color:white">Complaint successfully registered.Thanks for giving the information.</p>
        <h2 style="color:white">Complaints History</h2>
        <?php
        // put your code here
        session_start();
        if(isset($_SESSION["email"]))
        {
            $e=$_SESSION["email"];
            $db=mysql_connect("localhost","root","");
            mysql_select_db("dbbharathacks",$db);
            $q="select * from tbmap where email='$e'";
            $result=mysql_query($q);
            echo "<table  style='bordercolor:white' border='1' width='30%'><tr style='color:white'><td>S.No.<td>Complaint<td>Status</tr>";
            $i=0;
            while($row=mysql_fetch_array($result))
            {
                $i=$i+1;
                extract($row);
                echo "<tr style='color:white' ><td  >$i<td>$complaint<td>$status</tr>";
            }
            echo "</table>";
        }
        ?>
        <br>
        <a href="complaint_register.php"><u style="color:white">Submit another response</u></a><br><br>
        <a href="logout.php"><button class="btn btn-danger" value="Logout">LogOut</button></a>
    </body>
</html>
