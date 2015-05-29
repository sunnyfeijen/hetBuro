<?php
    include "header.html";
    $thisPage="event";
    include "navigation.php";
?>
    <script>

    function initialize() {
      var myLatlng = new google.maps.LatLng(51.44112, 5.46966);
      var mapOptions = {
        zoom: 12,
        center: myLatlng
      }
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'TAC'
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>


    <body>
    	<section class='about_description'>
            <img src="img/postertop.jpg" id='poster'>
            <section id="map-canvas"></section>
            <img src="img/posterbottom.jpg" id='poster'>
    	</section>
        
    </body>
</html>




