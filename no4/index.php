<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE html>
<html>

<head>
    <title>No 4 selskabslokaler</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <html lang="da">
    <meta name="description"
        content="Selskabslokaler ved søerne i København - Lækkre selskabslokaler med pavillon ude på søen, samt udlejning af svaner og cykelbåde">
    <meta name="keywords"
        content="Selskabslokaler, no4, svaner, søerne, nørrebro, nørrebrogade, restauranter, svaner, cykelbåde">
    <meta name="author" content="Anton Tobias Jensen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="./normalize.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--Jquery for lazy loading-->
    <script src="jquery-latest.js"></script>
    <script type="text/javascript" src="jquery.lazy.min.js"></script>
    <script type="text/javascript" src="jquery.lazy.av.min.js"></script>

    <script>
      $(function() {
        $(".lazy").Lazy();
      });
    </script>
      <script type="text/javascript">
        jQuery(function($) {
            if($(window).width()>950){
                $("video").lazy();
            }
        });
      </script>
</head>

<body>
    <!--Navbar-->

    <div class="topnav" id="myTopnav">
        <a class="active">NO4.DK</a>
        <a href="#menu">Menu</a>
        <a href="#cafe">Cafe</a>
        <a href="#pavilion">Pavilion</a>
        <a href="#svaner">Svaner</a>
        <a href="#kontakt">Kontakt</a>
        <a href="#" class="flagIcon"><img src="./Media/dk.png" /><p class="textForSmallMenu">Dansk</p></a>
        <a href="./en/index.html" class="flagIcon"><img src="./Media/uk.png" /><p class="textForSmallMenu">English</p></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="landingImage">

    </div>

    <!--Cafe-->
    <div style="height: 1px; padding-top:-1px;" id="cafe"></div>
    <div class="box">
        <div class="lazy" id="imageTextIMG" data-src="<cms:editable name='a_image' type='image' />"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='a_afsnit_overskrift' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='a_afsnit_tekst' type='richtext'/>
            </p>
        </div>
    </div>

    <div class="boxPhone">
    <div class="lazy" id="imageTextIMG" data-src="<cms:show a_image/>"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show a_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show a_afsnit_tekst/></p>
        </div>
    </div>

    <!--Pavilion-->
    <div style="height: 1px; margin-top:-1px;" id="pavilion"></div>
    <div class="box">
        <div class="textbox">
        <h1 id="imageTextH1"><cms:editable name='b_afsnit_overskrift' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='b_afsnit_tekst' type='richtext'/>
            </p>
        </div>
        <div class="lazy" id="imageTextIMG" data-src="<cms:editable name='b_image' type='image' />"></div>
    </div>

    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="<cms:show b_image/>"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show b_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show b_afsnit_tekst/></p>

            </p>
        </div>
    </div>
    <!--Social Features and maps-->


    <div class="socialAndMaps">
        <div id="googleMap" style="width:100%;height:600px;">

        </div>
        <div class="social">

        </div>
    </div>

    <!--Svaner-->
    <div style="height: 1px; margin-top:-1px;" id="svaner"></div>
    <div class="box">
        <div class="lazy" id="imageTextIMG" data-src="<cms:editable name='c_image' type='image' />"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='c_afsnit_overskrift' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='c_afsnit_tekst' type='richtext'/>
            </p>
        </div>
    </div>
    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="<cms:show c_image/>"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show c_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show c_afsnit_tekst/></p>
            </p>
        </div>
    </div>

    <!--Festlokaler-->
    <div class="box">
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='d_afsnit_overskrift' type='text'/></h1>
            <p id="imageTextP"><cms:editable name='d_afsnit_tekst' type='richtext'/>
            </p>
        </div>
        <div class="lazy" id="imageTextIMG" data-src="<cms:editable name='d_image' type='image' />"></div>
    </div>

    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="<cms:show d_image/>"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show d_afsnit_overskrift/></h1>
            <p id="imageTextP">
                <cms:show d_afsnit_tekst/>
            </p>
        </div>
    </div>


    <!--Job-->
    <div class="box">
        <div class="lazy" id="imageTextIMG" data-src="<cms:editable name='e_image' type='image' />"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='e_afsnit_overskrift' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='e_afsnit_tekst' type='richtext'/>
            </p>
        </div>
    </div>
    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="<cms:show e_image/>"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show e_afsnit_overskrift/></h1>
            <p id="imageTextP">
                <cms:show e_afsnit_tekst/>
            </p>
        </div>
    </div>


    <div class="bookTableElement">
        <a onclick="openTableNav()">
            <div class="bookTableButton">
                Book bord
            </div>
        </a>
    </div>


    <!--footer-->
    <div style="height: 1px; margin-top:-1px;" id="kontakt"></div>
    <div class="footerComponent">
        <div class="contactInformation">
            <h3>Kontakt</h3>
            <p><a href="tel:+4535351219" style="text-decoration: none; color:#fdffff;">+ 45 3535 1219</a></p>
            <p><a href="mailto:booking@kaffesalonen.com"
                    style="text-decoration: none; color:#fdffff;">booking@kaffesalonen.com</a></p>
            <h3>Åbningstider</h3>
            <p>Fre-Lør: 8:00-24:00</p>
            <p>Lør-Søn: 10:00-24:00</p>
            <h3>Adresse</h3>
            <address>
                <p>Peblinge Dossering 7</p>
                <p>2200 København</p>
            </address>
        </div>
        <div class="mapsInformation">
            <div id="googleMap2" style="width:100%;height:250px;"></div>

            <!--
                     <iframe width="100%" height="250" id="gmap_canvas"
                src="https://maps.google.com/maps?q=kaffesalonen&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe>

                -->

        </div>

    </div>

    <div id="bookTablePopUp" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeTableNav()">&times;</a>
        <iframe src="https://book.easytablebooking.com/book/?plain=1&id=59ac7&lang=da" frameborder="0">
        </iframe>
    </div>

    <div id="seeCykleBoatPrices" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeBoatNav()">&times;</a>
        <div class="boatPriceses">
            <h1>Priser</h1>
            <p>Svanecykel til 2 personer koster 100,- kr. pr. 1/2 time.</p>
            <p>Svanecykel til 2 personer koster 150,- kr. pr. 1 time.</p>
            <br>
            <p>Store vandcykler til 4 voksne koster 150,- kr. pr. ½ time.</p>
            <p>Store vandcykler til 4 voksne koster 200,- kr. pr. 1 time.</p>
            <br>
            <p>Store vandcykler til 5 voksne koster 200,- kr. pr. ½ time.</p>
            <p>Store vandcykler til 5 voksne koster 250,- kr. pr. 1 time.</p>
            <br>
            <br>
            <p>Vandcyklerne lejes i Pavillon Bar eller i Kaffesalonen.</p>
            <p>Bådudlejningen i Pavillon Bar har åbent fra kl. 10:00 til kl. ca. 21:00 alle ugens dage.</p>

            </p>
        </div>
    </div>

    <div id="seeCoffeTab" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeCoffeNav()">&times;</a>
            <div class="boatPriceses">
                <h1>Fantastisk kaffe fra columbia</h1>
                <p>Kaffen er leveret fra en lokal colombiansk kaffebonde, som sikrer du får én af de bedste kaffesmagsnuancer i København.
                </p>
                <img src="./Media/images/novideo.png" style="height: 250px; width:auto"/>
            </div>
        </div>


    <script>
        function openTableNav() {
            document.getElementById("bookTablePopUp").style.height = "100%";
        }

        function closeTableNav() {
            document.getElementById("bookTablePopUp").style.height = "0%";
        }
    </script>
    <script>
        function openBoatNav() {
            document.getElementById("seeCykleBoatPrices").style.height = "100%";
        }

        function closeBoatNav() {
            document.getElementById("seeCykleBoatPrices").style.height = "0%";
        }
    </script>

    <script>
        function openCoffeNav() {
            document.getElementById("seeCoffeTab").style.height = "100%";
        }

        function closeCoffeNav() {
            document.getElementById("seeCoffeTab").style.height = "0%";
        }
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <script>
        function myMap() {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(55.686547, 12.561565),
                title: "Kaffesalonen"
            });
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(55.686547, 12.561565),
                title: "Kaffesalonen"
            });
            var mapProp = {
                center: new google.maps.LatLng(55.686726, 12.561701),
                zoom: 14,
                disableDefaultUI: true,
                styles:
                    [
                        {
                            "featureType": "administrative",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 65
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": "50"
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "lightness": "30"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "lightness": "40"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#ffff00"
                                },
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -97
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -100
                                }
                            ]
                        }
                    ]
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            marker.setMap(map);

            var map2 = new google.maps.Map(document.getElementById("googleMap2"), mapProp);
            marker1.setMap(map2);

        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWr1ZVcFkl-OUhq3OFH6Oh4Xm2UepDp_E&callback=myMap"></script>

</body>

</html>

<?php COUCH::invoke(); ?>