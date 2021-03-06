<?php require_once( '../couch/cms.php' ); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Kaffesalonen ved søerne</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta charset="UTF-8">
    <html lang="en">
    <meta name="description"
        content="Kaffesalonen ved søerne - Lækker cafe med pavillon ude på søen, samt udlejning af svaner og cykelbåde">
    <meta name="keywords"
        content="Kaffesalonen, svaner, søerne, nørrebro, nørrebrogade, restauranter, svaner, cykelbåde">
    <meta name="author" content="Anton Tobias Jensen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Jquery for lazy loading-->
        <script src="../jquery-latest.js"></script>
        <script type="text/javascript" src="../jquery.lazy.min.js"></script>
        <script type="text/javascript" src="../jquery.lazy.av.min.js"></script>
    
        <script>
          $(function() {
            $(".lazy").Lazy();
          });
        </script>
          <script type="text/javascript">
            jQuery(function($) {
              $("video").lazy();
            });
          </script>
</head>

<body>
    <!--Navbar-->

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active"><img src="../Media/logo.png"></img></a>
        <a href="#menu">Menu</a>
        <a href="#cafe">Cafe</a>
        <a href="#pavilion">Pavilion</a>
        <a href="#svaner">Swans</a>
        <a href="#kontakt">Contact</a>
        <a href="../index.php" class="flagIcon"><img src="../Media/dk.png" /><p class="textForSmallMenu">Dansk</p></a>
        <a href="#" class="flagIcon"><img src="../Media/uk.png" /><p class="textForSmallMenu">English</p></a>
        <a href="https://www.facebook.com/kaffesalonen/" target="_blank" class="fa fa-facebook"><p class="textForSmallMenu">Facebook</p></a>
        <a href="https://www.instagram.com/kaffesalonen/" target="_blank" class="fa fa-instagram"><p class="textForSmallMenu">Instagram</p></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!--Forside-->
    <div class="videoContainer">
            <video autoplay muted loop class="backgroundVideo">
            <data-src src="../Media/KAFFESALONEN.mp4" type="video/mp4"></data-src>
            </video>
        </div>
        <div class="videoContainerMobile">
            <img class="lazy" data-src="../Media/images/novideo.png"/>
        </div>

    
        <div class="bookTableButtonVideo">
            <a onclick="openTableNav()">
                <img src="../Media/BookBordENG.png"></img>
            </a>
    
        </div>
    
        <!--Mad drinks-->
        <div class="foodAndDrinks" id="menu">
            <div class="foodBox">
                <div class="lazy" id="foodAndDrinksContainer" data-src="../Media/images/mad.jpg">
                    <a class="foodAndDrinksButton" href="../Media/menusmall.png" target="_blank">
                        <div>
                            <p>Mad</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="drinksBox">
                <div class="lazy" id="foodAndDrinksContainer" data-src="../Media/images/drinks.jpg">
                    <a class="foodAndDrinksButton" href="../Media/drinkssmall.png" target="_blank">
                        <div>
                            <p>Drinks</p>
                        </div>
                    </a>
                </div>
            </div>
    
        </div>
    
    <!--Cafe-->
    <div style="height: 1px; padding-top:-1px;" id="cafe"></div>
    <div class="box">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/cafe.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='en_cafe_afsnit_overskrift' desc='Overskrifte i cafe afsnittet' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='en_cafe_afsnit_tekst' desc='Teksten i cafe afsnittet' type='richtext'/>
            </p>
                <div class="boatPricesContainer">
                        <a onclick="openCoffeNav()">
                            <div class="bookTableButton">
                                Læs mere her
                            </div>
                        </a>
                </div>
        </div>
    </div>

    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/cafe.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show en_cafe_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show en_cafe_afsnit_tekst/></p>
                <div class="boatPricesContainer" style="padding-bottom: 20px">
                        <a onclick="openCoffeNav()">
                            <div class="bookTableButton">
                                Læs om kaffen her her
                            </div>
                        </a>
                </div>
        </div>
    </div>

    <!--Pavilion-->
    <div style="height: 1px; margin-top:-1px;" id="pavilion"></div>
    <div class="box">
        <div class="textbox">
        <h1 id="imageTextH1"><cms:editable name='en_pavillonen_afsnit_overskrift' desc='Overskrifte i pavilionen afsnittet' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='en_pavillonen_afsnit_tekst' desc='Teksten i pavilionen afsnittet' type='richtext'/>
            </p>
        </div>
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/pavillionen.jpg"></div>
    </div>

    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/pavillionen.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show en_pavillonen_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show en_pavillonen_afsnit_tekst/></p>

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
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/svaner.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='en_svaner_afsnit_overskrift' desc='Overskrifte i svaner afsnittet' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='en_svaner_afsnit_tekst' desc='Teksten i svaner afsnittet' type='richtext'/>
            </p>
            <div class="boatPricesContainer">
                <a onclick="openBoatNav()">
                    <div class="bookTableButton">
                        Priser
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/svaner.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show en_svaner_afsnit_overskrift/></h1>
            <p id="imageTextP"><cms:show en_svaner_afsnit_tekst/></p>
                <div class="boatPricesContainer">
                    <a onclick="openBoatNav()">
                        <div class="bookTableButton">
                            Priser
                        </div>
                    </a>
                </div>
            </p>
        </div>
    </div>

    <!--Festlokaler-->
    <div class="box">
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='en_festlokaler_afsnit_overskrift' desc='Overskrifte i festlokaler afsnittet' type='text'/></h1>
            <p id="imageTextP"><cms:editable name='en_festlokaler_afsnit_tekst' desc='Tekst i festlokaler afsnittet' type='richtext'/>
            </p>
        </div>
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/festlokaler.jpg"></div>
    </div>

    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/festlokaler.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show en_festlokaler_afsnit_overskrift/></h1>
            <p id="imageTextP">
                <cms:show en_festlokaler_afsnit_tekst/>
            </p>
        </div>
    </div>


    <!--Job-->
    <div class="box">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/job.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:editable name='en_job_afsnit_overskrift' desc='Overskrifte i job afsnittet' type='text'/></h1>
            <p id="imageTextP">
            <cms:editable name='en_job_afsnit_tekst' desc='Overskrifte i job afsnittet' type='richtext'/>
            </p>
        </div>
    </div>
    <div class="boxPhone">
        <div class="lazy" id="imageTextIMG" data-src="../Media/images/job.jpg"></div>
        <div class="textbox">
            <h1 id="imageTextH1"><cms:show en_job_afsnit_overskrift/></h1>
            <p id="imageTextP">
                <cms:show en_job_afsnit_tekst/>
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
            <h3>Contact</h3>
            <p><a href="tel:+4535351219" style="text-decoration: none; color:#fdffff;">+ 45 3535 1219</a></p>
            <p><a href="mailto:booking@kaffesalonen.com"
                    style="text-decoration: none; color:#fdffff;">booking@kaffesalonen.com</a></p>
            <h3>Opening hours</h3>
            <p>Fre-Sat: 8:00-24:00</p>
            <p>Sat-Sun: 10:00-24:00</p>
            <h3>Address</h3>
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
        </iframe>
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
