  $(document).ready(function () {

        var map;
        var marker;
        function initialize() {
            var mapOptions = {
                zoom: 6,
                center: new google.maps.LatLng(46.8008243, 2.4357938)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
        $(".eve").click(function () {

            var valEvenement = $(this).val();

            $.ajax({
                method: "GET",
                url: "../php/coordonnees.php",
                data: {query: valEvenement},
                dataType: 'html',
                success: function (data) {

                    if (!marker) {
                    } else {
                        marker.setMap(null);
                    }

                    var lat = data.substring(0, data.indexOf(' '));
                    var long = data.substring(data.lastIndexOf(' ') + 1);

                    var myLatlng = new google.maps.LatLng(lat, long);

                    marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'Hello World!'
                    });
                    //alert(data);
                }
            })
        });
    });