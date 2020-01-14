<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my project</title>
    
<style>
#map{
    height:400px;
    width:100%;
}
</style>

</head>
<body>
<h1>My Google Map</h1> 
     <div id="map"></div> 
<script>
function initMap()
{
     var options ={
         zoom:6,
         center:{lat:28.3949,lng:84.1240}
     }
     var map =new google.maps.Map(document.getElementById('map'),options);


      //add marker
      var marker = new google.maps.Marker({
          position:{lat:27.7172,lng:85.3240},
          map:map,
          icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
          
        });
        var inflowWindow=new google.maps.InfoWindow({
            contact : '<h1>Lynn MA</h1>'
        });
        marker.addListener('click',function(){
            infoWindow.open(map,marker);
        });

    }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeP9T-ZeXD7aW-9hHjBSnG9g-DU8n5ooY&callback=initMap">
</script>

</body>
</html>