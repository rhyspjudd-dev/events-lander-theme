<?php 
/*
Template Name: Event Booker
Template Post Type: post
*/
get_header(); ?>

    <script type="text/javascript">
    (function( $ ) {
    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker( $marker, map ) {

        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };

        // Create marker instance.
        var marker = new google.maps.Marker({
            position : latLng,
            map: map
        });

        // Append to reference for later use.
        map.markers.push( marker );

        // If marker contains HTML, add it to an infoWindow.
        if( $marker.html() ){

            // Create info window.
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // Show info window when marker is clicked.
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open( map, marker );
            });
        }
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap( map ) {

        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        // Case: Single marker.
        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );

        // Case: Multiple markers.
        } else{
            map.fitBounds( bounds );
        }
    }

    })(jQuery);
    </script>

    <?php include ("component/nav.php"); ?>

    <header class="intro-event-description" style="background: url(<?php the_field('event_header_image'); ?>) center no-repeat;">
        <div class="content">
        <h1><?php the_field('event_title'); ?></h1>
        </div>
    </header>

    <section class="dtp">
        <div class="content">
            <h3>D&T</h3>
            <?php the_field('date_time_picker'); ?>
        </div>
    </section>

    <section class="map">
        <!-- <div><?php // the_field('map'); ?></div> -->

        <?php $map = get_field('map', get_the_ID()); ?>

        <script type="text/javascript"> 

        function initialize() {
                var myLatlng = new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>);
                var myOptions = {
                zoom: 11,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            }

            function loadScript() {
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
                document.body.appendChild(script);
            }

            window.onload = loadScript;
            </script>

        <div id="map_canvas" style="height: 350px; width: 100%;"></div>

    </section>

<?php get_footer(); ?>

