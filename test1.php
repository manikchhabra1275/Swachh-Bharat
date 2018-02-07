
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->





<html>
    <head>
        <meta charset="UTF-8">
        <title>

        </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

   <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <h4 style="color:white" > <u>REGISTERED COMPLAINTS</u></h4>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
   <script src="js\knockout.js"></script>





</head>
<body style=" margin-left: 100px;  background: linear-gradient(45deg, black,#5C6BC0);background-repeat: no-repeat; overflow-x:hidden">
    
    <?php

             $db=mysql_connect("localhost","root","");
 mysql_select_db("dbbharathacks",$db);
 $q="select * from tbmap";
 $result=mysql_query($q);
 $i=0;
 echo "<table border='1' width='30%'><tr style='color:white' ><td>S.No.<td>Complaint<td colspan='2'>Status</tr>";
 while($row=mysql_fetch_array($result))
 {
     $i=$i+1;
     extract($row);
     echo "<tr style='color:white' ><td>$i<td>$complaint";
     echo "<td  ><label style='color:white' >Accepted</label><input type='checkbox' id='$i.t1' name='$i.t1'/>";
 }
 echo "</table>";
 $q1="update tbmap set status=1";
 mysql_query($q1);
          ?>
  <div class="container">
    <div class="row">
    
        <div class="col s6" id="map" style="height:150%; width:80%">
        
  </div>
  <div class="col s6">
      <script type="text/javascript">
          
      </script>
</div>
</div>

      





        <?php
        // put your code here

$return_arr = array();

 $db=mysql_connect("localhost","root","");
 mysql_select_db("dbbharathacks",$db);
 $q="select * from tbmap";
 $result=mysql_query($q);

while ($row = mysql_fetch_array($result)) {
    $row_array['id'] = $row['id'];
    $row_array['name'] = $row['name'];
    $row_array['latitude'] = $row['latitude'];
    $row_array['longitude'] = $row['longitude'];
    array_push($return_arr,$row_array);
}

json_encode($return_arr);
?>
        <script  type="text/javascript">

            var City=[];
                    City= <?php echo json_encode($return_arr); ?>;
            console.log(City);
            var map;

    function initMap() {
        // creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 28.38,
                lng: 77.12
            },
            zoom: 10
        });

         ko.applyBindings(new viewmodel());
    }
    function googleerror()
    {
      alert("Map is not loading properly");
    }
  var search=['Rajmandir Theatre','Chokhi Dhani','Amber Fort'];
  var locations=[];

  var viewmodel = function() {
      var defaultMarker = makeMarkerIcon('0091ff'); //default color of marker is stored in default icon
      var highlightedMarker = makeMarkerIcon('FFFF24'); //color when we highlight it*/
     var Infowindow = new google.maps.InfoWindow(); //info window of marker.

      function makeMarkerIcon(markerColor) {
      //passing marker color and building marker icon in this function
          var markerImage = new google.maps.MarkerImage(
              'http://chart.googleapis.com/chart?chst=d_map_spin&chld=1.15|0|' + markerColor +
              '|40|_|%E2%80%A2', //type of marker we choose.
              new google.maps.Size(21, 34), //size of marker height and widh
              new google.maps.Point(0, 0),
              new google.maps.Point(10, 34), //accuracy where they are pointing .
              new google.maps.Size(21, 34));
                console.log("fghjk");
          return markerImage;
      }

      for (i = 0; i < City.length; i++) {

            console.log("nj");
          var marker = new google.maps.Marker({ //in marker we are settings marker's details in marker variable
              //by iterating it into a loop through all places that we decided in model

              position: {
                  lat: parseFloat(City[i].latitude), //inserting latitude and longitude
                  lng: parseFloat(City[i].longitude)
              },
              icon: defaultMarker, //setting icon to default marker
              map: map, //set markers on map
              title: (i+1)+" "+City[i].name, //title of markers
              rating: '', //ratings of places that we added
              venue: City[i].foursquareId, //foursquare id
              selected:City[i].selected,//marker is selected or not
              image: '',
              show:'visible' //setting image when click on marker
          });
          locations.push(marker);
        }
        };





           </script>
           <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSj-NGL4BjWvzud0dDgEjL9OMv89fH8ko&v=3&callback=initMap" onerror="googleerror()">
      //google api
  </script>
  </div>
    <a href="logout.php"><button class="btn btn-danger" >Logout </button></a>
    <br>
</body>
</html>
