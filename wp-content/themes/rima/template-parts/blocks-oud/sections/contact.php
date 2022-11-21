<?php
    // Map related variables
    $locations = get_sub_field("locaties");
    $maps_array = [];

    foreach($locations as $location):
        $title = $location["locatie_naam"];
        $row = [
            'title' => $title,
            'lat' => $location["locatie_adres"]["lat"],
            'lng' => $location["locatie_adres"]["lng"],
            'office' => $location["is_office"]
        ];
        $maps_array[] = $row;
    endforeach;

    $json_maps = json_encode($maps_array);
    $marker_count = 0;

?>

<section class="block-map container-fluid bg-primary g-0">
    <div class="grid">
        <div class="g-col-12 g-col-lg-6 map-container">
            <div id="map"></div>
        </div>
        <div class="g-col-12 g-col-lg-6 container d-flex flex-column justify-content-center content-wrap py-5 px-3 px-sm-4 py-md-7 px-lg-7 py-lg-0">
            <?= $content; ?>
        </div>
    </div>
</section>

  <script>

    var markerArray = [];
    var locations = <?= $json_maps; ?>;

    function initMap() {

        var center = {
            lat: 52.228936,
            lng: 5.321492
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            styles: [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#333333"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#cacaca"
                                },
                                {
                                    "saturation": "0"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#f00"
                                },
                                {
                                    "saturation": 100
                                },
                                {
                                    "lightness": 0
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dedede"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e9e9e9"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        }
                    ],
            center: center
        });
        
        <?php
        foreach($locations as $location): ?>
            var iconFile = 'MF_icon_drank.svg';
            
            if(locations[<?= $marker_count; ?>]['office'] == true) {
               var iconFile = 'MF_icon_kantoor.svg';
            }

            var icon = {
                url: 'wp-content/themes/byron/assets/img/svg/' + iconFile, // url
                scaledSize: new google.maps.Size(35, 35), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 0) // anchor
            };
            markerArray[<?= $marker_count; ?>] = marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[<?= $marker_count; ?>]['lat'], locations[<?= $marker_count; ?>]['lng']),
                map: map,
                title: locations[<?= $marker_count; ?>]['title'],
                icon: icon
            });

            markerArray[<?= $marker_count; ?>].addListener('click', function (count) {
                alert(locations[<?= $marker_count; ?>]['title']);
            });
        <?php
        $marker_count++;
        endforeach;
        ?>
    }

  </script>