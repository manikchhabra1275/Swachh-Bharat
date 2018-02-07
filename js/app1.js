var City = [{
        name: 'Hawa mahal',
        lat: 26.9239,
        lng: 75.8267,
        foursquareId: '4f1d22f8e4b044fd373c32bb',
        selected:false,
        show: true
    },
    {
        name: 'World Trade Park',
        lat: 26.8543,
        lng: 75.8050,
        foursquareId: '4d6ad44e7e3eba7a10a7ee4c',
        selected:false,
        show: true
    },
    {
        name: 'Rajmandir Theatre',
        lat: 26.9158,
        lng: 75.8101,
        foursquareId: '4c7940de20bb199cd3ee0d29',
        selected:false,
        show: true
    },
    {
        name: 'Amber Fort',
        lat: 26.9855,
        lng: 75.8513,
        foursquareId: '4bb16be4f964a52063923ce3',
        selected:false,
        show: true
    },
    {
        name: 'Chokhi Dhani',
        lat: 26.7647,
        lng: 75.8335,
        foursquareId: '4b6dab03f964a520bd842ce3',
        selected:false,
        show: true
    }


];
var search=[];
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
                lat: City[i].lat, //inserting latitude and longitude
                lng: City[i].lng
            },
            icon: defaultMarker, //setting icon to default marker
            map: map, //set markers on map
            title: City[i].name, //title of markers
            rating: '', //ratings of places that we added
            venue: City[i].foursquareId, //foursquare id
            selected:City[i].selected,//marker is selected or not
            image: '',
            show:'visible' //setting image when click on marker
        });
      
        locations.push(marker);
      };

    }

        //adding marker in location array
