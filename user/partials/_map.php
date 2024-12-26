<!doctype html>
<html>
  <head>
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.19.0.min.js"></script>
    <link rel="stylesheet" href="map.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      #map-canvas{
      width:100%;
      height:90%;
      margin-left: -20px;
      position:absolute;
      /* border: 6px solid #056af7;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
  }
    </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
      <div class="bg"></div>
     <div class="bg-others"> 
    <div class="container">  
        <center><button class="btn btn-success " id="action">Start Tracking</button></center><br>
        <center><div id="map-canvas"></div></center>
    </div>
          </div>

    <script>
    window.lat = 18.6215708333;
    window.lng = 73.818913;

    var map;
    var mark;
    var lineCoords = [];
      
    var initialize = function() {
      map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:lat,lng:lng},zoom:12});
      mark = new google.maps.Marker({position:{lat:lat, lng:lng}, map:map});
    };

    window.initialize = initialize;

    var redraw = function(payload) {
      if(payload.message.lat){
      lat = payload.message.lat;
      lng = payload.message.lng;

      map.setCenter({lat:lat, lng:lng, alt:0});
      mark.setPosition({lat:lat, lng:lng, alt:0});
      
      lineCoords.push(new google.maps.LatLng(lat, lng));

      var lineCoordinatesPath = new google.maps.Polyline({
        path: lineCoords,
        geodesic: true,
        strokeColor: '#2E10FF'
      });
      
      lineCoordinatesPath.setMap(map);}
    };

    var pnChannel = "raspi-tracker";

    var pubnub = new PubNub({
      publishKey:   'pub-c-983bb714-3504-4842-881b-6e1ae14b3c1f',
      subscribeKey: 'sub-c-f8e5ab1a-61bb-11ec-8e07-d6dcb445abf2'
    });
        
    document.querySelector('#action').addEventListener('click', function(){
        var text = document.getElementById("action").textContent;
        if(text == "Start Tracking"){
            pubnub.subscribe({channels: [pnChannel]});
            pubnub.addListener({message:redraw});
            document.getElementById("action").classList.add('btn-danger');
            document.getElementById("action").classList.remove('btn-success');
            document.getElementById("action").textContent = 'Stop Tracking';
        }
        else{
            pubnub.unsubscribe( {channels: [pnChannel] });
            document.getElementById("action").classList.remove('btn-danger');
            document.getElementById("action").classList.add('btn-success');
            document.getElementById("action").textContent = 'Start Tracking';
        }
        });
        
    // function newPoint(time) {
    //     var radius = 0.01;
    //     var x = Math.random() * radius;
    //     var y = Math.random() * radius;
    //     return {lat:window.lat + y, lng:window.lng + x};
    //         }
    //     setInterval(function() {
    //     pubnub.publish({channel:pnChannel, message:newPoint()});
    //     }, 500);

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCmOwb-LwKhn1uXdmRKSVaGralKAJPAx_E&callback=initialize"></script>
  </body>
</html>