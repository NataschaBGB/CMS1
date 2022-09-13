<?php
    // header og aside er på en anden .php og bliver inkluderet her
    include "header-aside.php";
?>

<main>

    <!-- INDSÆT NOGET TIL EN FORSIDE -->
    <div class="headline" id="googleMap"></div>
    
    <div class="front">
        <h1>bdffdg</h1>
        <p>fdsfsdf</p>
    </div>
    
    <div class="front">
        <h1>bdffdg</h1>
        <p>fdsfsdf</p>
    </div>
    
    <div class="front">
        <h1>bdffdg</h1>
        <p>fdsfsdf</p>
    </div>

    <script>
        function myMap() {
            var mapProp= {
                // where is the map centered by coordinates
                center:new google.maps.LatLng(55.64923228807135, 12.268866269611554),
                // set zoom level
                zoom:15,
            };

            // get map element by ID (id="googleMap" in div) and set it to specifications in function (mapProp)
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            // set new location with coordinates
            var location = new google.maps.LatLng(55.6479263517358, 12.272845163350219);
            // make new variable that contains info on the map marker
            marker = new google.maps.Marker({
                position: location,
                // which map ((var map) element set in div above)
                map: map,
                title: "AspIT København"
            });

            // set marker on "location" variable
            marker.setMap(location)
        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADq0uwJ1YAPdB1t21Vx1AgJfKx6vlebHs&callback=myMap"></script>

</main>

<?php
    // footer er på en anden .php og bliver inkluderet her
    include "footer.php";
?>