<?php include './includes/head.php' ?>
<cms:template title="Home Page" />



<div class="main-container home">
    <div class="main-wrapper">

        <?php include './includes/header.php' ?>

        <div class="splash">
            <!-- <video width="320" height="240" muted loop autoplay="autoplay">
                <source src="video/video.mp4" type="video/mp4"> Your browser does not support the video tag.
            </video> -->
            <div class="white-overlay"></div>

            <div class="splash-inner-container">
                <img class="logo" src="img/logo.svg" alt="Logo" />
                <h1 class="logo-text">Daya Group of Companies</h1>
                <h2>Uplifting the rural economy</h2>
                <div class="divider">
                    <img class="marker black" src="img/diamond-marker.svg" alt="Marker" />
                    <img class="marker white" src="img/diamond-marker-white.svg" alt="Marker" />
                </div>
                <div class="splash-nav">
                    <h3>About Us</h3>
                    <h3>Companies</h3>
                    <h3>Board of Directors</h3>
                    <h3>Contact Us</h3>
                </div>
            </div>

            <img class="down-arrows black" src="img/down-arrows-black.svg" alt="Down arrows" />
            <img class="down-arrows white" src="img/down-arrows-white.svg" alt="Down arrows" />
        </div>

        <div class="main-content">
            <div class="intro-section">
                <cms:editable name='intro_text' title="Intro Text" type='richtext' css='/css/main.css' toolbar='custom' custom_toolbar="<cms:embed 'no_format.inc' />" >
                    <h1>Sri Lanka’s Leading Conglomerate</h1>
                    <p class="large">
                        In 1984, Daya Group (Pvt) Ltd commenced operations, starting out initially as a construction company. Over the years, it
                        has expanded into one of Sri Lanka’s pre-eminent privately owned conglomerates, continuing to grow
                        through strategic investments. While having a strong emphasis on quality and performance, our company
                        strives to achieve excellence in customer satisfaction.
                    </p>
                </cms:editable>
                <a class="btn big" href="about-us.php">Learn More
                    <img class="right-arrows" src="img/right-arrows.svg" alt="Right Arrows" />
                </a>
            </div>
            <div class="divider" id="companies"></div>

             <!-- Company profile list -->
            <div class="our-industries-section">
                <h1>Our Companies & Industries</h1>
                <h3>Click below to find out more</h3>
                <cms:pages masterpage='company-profile.php'>
                    <div class="industry-outer-container hvr-grow-shadow">
                        <a href="<cms:show k_page_link />" class="industry-block">

                            <div class="black-overlay"></div>
                            <img src="<cms:thumbnail splash_image width='400' height='400' crop='1'/>" alt="image" />
                            <div class="inner-container">

                                <h1>
                                    <cms:show k_page_title />
                                </h1>
                                <h3>
                                    <cms:show category_for_front_page />
                                </h3>
                                <!-- <div class="btn small" class="btn small">Learn More</div> -->
                            </div>

                        </a>
                    </div>
                </cms:pages>
                <div class="industry-outer-container hvr-grow-shadow" style="opacity:0;">
                    <a href="<cms:show k_page_link />" class="industry-block">

                        <div class="black-overlay"></div>
                        <img src="<cms:thumbnail splash_image width='400' height='400' crop='1'/>" alt="image" />
                        <div class="inner-container">

                            <h1>
                                <cms:show k_page_title />
                            </h1>
                            <h3>
                                <cms:show category_for_front_page />
                            </h3>
                            <!-- <div class="btn small" class="btn small">Learn More</div> -->
                        </div>

                    </a>
                </div>
            </div>
        </div> <!-- end company profile list -->

        <?php include './includes/footer.php' ?>