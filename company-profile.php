<?php include './includes/head.php' ?>

<cms:template title="Company Profile" clonable='1'>

    <cms:config_list_view orderby='weight' order='asc'>
        <cms:field 'k_selector_checkbox' />
        <cms:field 'k_page_title' sortable='0' />
        <cms:field 'k_up_down' />
        <cms:field 'k_actions' />
    </cms:config_list_view>

    <cms:editable name="company_logo" order="1" label='Company Logo' quality="100" show_preview='1' type="image" />
    <cms:editable name="category_for_front_page" order="2" label="Company Industry/Category" desc="The industry this company belongs to" type="text" />
    <cms:editable name="company_address" order="3" label="Company Address" type="textarea" desc="Make sure to add new lines" />
    <cms:editable name="googlemaps_query" order="4" label="Company Location (For Google Maps)" type="text" desc="The location/address when searched on https://www.google.com/maps e.g. 'Daya Group of Companies' will work for Daya HQ">Daya Group of Companies</cms:editable>
    <cms:editable name="googlemaps_coord" order="5" label="Company Coordinates (ONLY IF ABOVE DOESN'T WORK)" type="text" desc="If the above doesn't work you can use the direct coordinates of the location. E.g. Daya HQ's coordinates are 6.857088, 79.891006, you can get these from https://www.google.com/maps by right clicking and clicking 'What's Here?'" />

    <cms:editable name="company_email" order="6" label="Company Email" type="text" desc="If you have multiple phone numbers please press the + button and add more" />
    <cms:repeatable name='company_phone_repeatable' label='Company Phone Number' order='7'>
        <cms:editable type='text' name='company_phone' label='Company Phone Number' />
    </cms:repeatable>
    <cms:editable name="company_website" order="8" label="Company Website" type="text" />
    <cms:editable name="company_profile_download" order="9" label="Company Profile Download File" desc="This could be a PDF of the company's info" type="file" />

    <cms:editable name="splash_image" order="10" label='Splash Image' quality="100" desc='The first image that appears on a company profile page and the image used to its corresponding home page block' show_preview='1' width="1600" type="image" />
    <cms:editable name="profile_intro" order="11" label="Intro Text" desc="The opening paragraph text" type="richtext" css='/css/main.css' toolbar='custom' custom_toolbar="<cms:embed 'no_format.inc' />">

        <cms:editable name="intro_image_1" order="12" label="Intro Image (Top Left)" quality="100" desc="The image that accompanies the opening paragraph" show_preview='1' crop="1" height="495" width="495" type="image" />>
        <cms:editable name="intro_image_2" order="12" label="Intro Image (Top Right)" quality="100" desc="The image that accompanies the opening paragraph" show_preview='1' crop="1" height="495" width="495" type="image" />>
        <cms:editable name="intro_image_3" order="12" label="Intro Image (Bottom Left)" quality="100" desc="The image that accompanies the opening paragraph" show_preview='1' crop="1" height="495" width="495" type="image" />>
        <cms:editable name="intro_image_4" order="12" label="Intro Image (Bottom Right)" quality="100" desc="The image that accompanies the opening paragraph" show_preview='1' crop="1" height="495" width="495" type="image" />>

        <h1>Who We Are</h1>

        <p>
            We are Olympus Tea Company, the most recent addition to the ever-growing Sri Lankan conglomerate, Daya Group of Companies. With an annual turnover in excess of USD 50 million, Daya Group of Companies is emerging as a leader in several areas of business including apparel manufacturing, construction, transport, fashion, micro-banking, household and consumer electronics, agriculture, plastics, packaging, printing, aviation and tourism.
        </p>
    </cms:editable>




</cms:template>



<!-- 
    END OF TEMPLATE 
-->



<?php include './includes/header.php' ?>

<div class="main-container company-profile">
    <div class="main-wrapper">

        <div class="splash" style="background-image:url('<cms:show splash_image />')">

            <div class="black-overlay"></div>

            <div class="header-container">
                <div style="display:none;" class="static-header">
                    <a href="index.php">
                        <img src="img/logo.svg" alt="Logo" />
                        <h3>Daya Group of Companies</h3>
                    </a>
                    <div class="static-header-links">
                        <a href="about-us.php">About Us</a>
                        <a href="contact-us.php">Contact Us</a>

                        <div class="static-dropdown">

                            <span>
                                <a href="index.php#companies">Companies</a>
                            </span>
                        </div>

                        <a href="vacancies.php">Vacancies</a>
                    </div>
                </div>
            </div>

            <div class="splash-outer-container">
                <div class="splash-inner-container">
                    <img class="company-logo" src="<cms:show company_logo />" alt="Company Logo" />

                    <h1>
                        <cms:show k_page_title />
                    </h1>
                    <h3>Company Profile</h3>
                </div>

                <div class="divider-outer-container">
                    <div class="divider">
                        <img class="marker" src="img/diamond-marker-white.svg " alt="Marker" />
                    </div>
                </div>
                <div class="splash-nav">
                    <a href="<cms:link 'about-us.php' />">
                        <h3>About Us</h3>
                    </a>
                    <a href="index.php#companies">
                        <h3>Companies</h3>
                    </a>
                    <a href="vacancies.php">
                        <h3>Vacancies</h3>
                    </a>
                    <a href="<cms:link 'contact-us.php' />">
                        <h3>Contact Us</h3>
                    </a>
                </div>
            </div>

        </div>
        <div class="main-content">

            <div class="intro-section">

                <div class="intro-text">
                    <cms:show profile_intro />
                </div>

                <div class="intro-imgs">
                    <div class="intro-imgs-inner">
                        <img src="<cms:show intro_image_1 />" alt="Intro Image" />
                        <img src="<cms:show intro_image_2 />" alt="Intro Image" />
                        <img src="<cms:show intro_image_3 />" alt="Intro Image" />
                        <img src="<cms:show intro_image_4 />" alt="Intro Image" />
                    </div>
                </div>
            </div>



        </div>
        <div class="profile-details-section">
            <div class="blocks">
                <div class="title-container">
                    <h1>
                        Contact Us
                    </h1>
                    <h2>
                        <cms:show k_page_title />
                    </h2>
                </div>

                <div class="inner-block contact-details">


                    <span class="contact">
                        <p class="prefix">
                            <strong>Email: </strong>
                        </p>
                        <p>
                            <cms:show company_email />
                        </p>
                    </span>
                    <span class="contact">
                        <p class="prefix">
                            <strong>Telephone: </strong>
                        </p>
                        <p>
                            <cms:show_repeatable 'company_phone_repeatable'>
                                <cms:show company_phone />
                                <br>
                            </cms:show_repeatable>

                        </p>
                    </span>
                    <p class="prefix">
                        <strong>Address: </strong>
                    </p>

                    <p style="    margin-top: 0;">
                        <cms:nl2br>
                            <cms:show company_address /></cms:nl2br>
                    </p>
                </div>

                <div class="inner-block contact-buttons">
                    <cms:if company_website>
                        <a href="<cms:show company_website />" class="outline-btn">Visit Official Page</a>
                    </cms:if>
                    <cms:if company_profile_download>
                        <a href="<cms:show company_profile_download />" class="outline-btn">Download Profile</a>
                    </cms:if>

                </div>



                <cms:if googlemaps_coord>
                    <iframe id="companyProfileMap" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyDjNoeRP6fg715vPUyqiiRfLItOdl9qSHs&zoom=13&center=<cms:show googlemaps_coord />" allowfullscreen>
                    </iframe>
                    <cms:else />

                    <iframe id="companyProfileMap" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjNoeRP6fg715vPUyqiiRfLItOdl9qSHs&zoom=13&q=<cms:show googlemaps_query />" allowfullscreen>
                    </iframe>
                </cms:if>
            </div>

        </div>

        <!-- Main container ends in footer -->
        <?php include './includes/footer.php' ?>