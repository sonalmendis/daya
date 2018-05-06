<?php include './includes/head.php' ?>
<cms:template title="Contact Us" />

<?php include './includes/header.php' ?>

<div class="main-container contact-us">
    <div class="main-wrapper">

        <div class="splash">
            <div class="splash-outer-container">
                <div class="lineTest"></div>
                <div class="divider-outer-container">
                    <div class="divider">
                        <img class="marker" src="img/diamond-marker.svg " alt="Marker" />
                    </div>
                </div>

                <div class="splash-inner-container">
                    <h1>Contact Us</h1>
                </div>

                <div class="divider-outer-container">
                    <div class="divider">
                        <img class="marker" src="img/diamond-marker.svg " alt="Marker" />
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="contact-block email">
                <h3>Email:</h3>
                <h2>dayagroup@daya-group.com</h2>
            </div>
            <div class="contact-block phone">
                <h3>Phone:</h3>
                <h2>+94 (0)115 390 100</h2>
            </div>
            <div class="contact-block address">
                <h3>Address:</h3>
                <!-- Google Map -->
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCpjZ2EhnbVapLkc-TUZ4-JA2ueL3XOwBc'></script>
                <div style='overflow:hidden;height:430px;width:100%;'>
                    <div id='gmap_canvas' style='height:430px;width:100%;visibility:visible !important;'></div>
                    <style>
                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }

                        .gm-style-pbt {
                            text-align: center;
                        }
                    </style>
                </div>
                <a style="color:white!important;" href='https://www.embedmap.net/'>adding google maps to my website</a>
                <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=192e6f7122683ffbec648b20455913b73260d5cb'></script>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 14,
                            center: new google.maps.LatLng(6.8568054, 79.89030839999998),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(6.8568054, 79.89030839999998)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong style="font-size:18px;margin-bottom:6px;">Daya Group Head Office</strong><br><br>No 362,<br>Colombo Road,<br>Pepiliyana Rd, <br>Boralesgamuwa<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
                <!-- /google map-->
            </div>
            <!-- /contact block -->
            <!--Contact Form-->

            <form id="contact-form" action="includes/phpmailer/phpscript/smtp.php" method="post">
                <h1>Contact Form</h1>
                <h2>Feel free to contact us using the form below</h2>
                <input type="text" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" name="name" />
                <input type="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="email"
                />
                <textarea name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>

                <button class="btn">Submit</button>
            </form>

        </div>
        <!-- /main content -->

    </div>
    <!-- #main -->
</div>
<!-- #main-container -->


<?php include './includes/footer.php' ?>