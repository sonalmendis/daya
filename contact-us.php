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

            <div class="left-block">
                <div class="contact-block email">
                    <h3>Email:</h3>
                    <h2>dayagroup@daya-group.com</h2>
                </div>
                <div class="contact-block phone">
                    <h3>Phone:</h3>
                    <h2>+94 (0)115 390 100</h2>
                </div>


                <form id="contact-form-desktop" class="contact-block" action="includes/phpmailer/phpscript/smtp.php" method="post">
                    <h3>Contact Form:</h3>

                    <input type="text" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" name="name" />
                    <input type="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="email" />
                    <textarea name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>

                    <button class="btn">Submit</button>
                </form>
            </div>


            <div class="contact-block address">
                <h3>Address:</h3>

                <iframe id="contactusMap" width="450" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjNoeRP6fg715vPUyqiiRfLItOdl9qSHs&q=Daya+Group+of+Companies" allowfullscreen>
                </iframe>
            </div>
            <!-- /contact block -->
            <!--Contact Form-->

            <form id="contact-form" action="includes/phpmailer/phpscript/smtp.php" method="post">
                <h1>Contact Form</h1>
                <h2>Feel free to contact us using the form below</h2>
                <input type="text" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" name="name" />
                <input type="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" name="email" />
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