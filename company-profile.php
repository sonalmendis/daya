<?php include './includes/head.php' ?>

<cms:template title="Company Profile" clonable='1'>
    <cms:editable name="profile_intro" title="Profile Intro" type="richtext" order="1">
        <h1>Who We Are</h1>

        <p>
            We are Olympus Tea Company, the most recent addition to the ever-growing Sri Lankan conglomerate, Daya Group of Companies.
            With an annual turnover in excess of USD 50 million, Daya Group of Companies is emerging as a leader in several
            areas of business including apparel manufacturing, construction, transport, fashion, micro-banking, household
            and consumer electronics, agriculture, plastics, packaging, printing, aviation and tourism.
        </p>

        <h1>What We Do</h1>

        <p>
            We are Olympus Tea Company, the most recent addition to the ever-growing Sri Lankan conglomerate, Daya Group of Companies.
            With an annual turnover in excess of USD 50 million, Daya Group of Companies is emerging as a leader in several
            areas of business including apparel manufacturing, construction, transport, fashion, micro-banking, household
            and consumer electronics, agriculture, plastics, packaging, printing, aviation and tourism.
        </p>
    </cms:editable>

    <cms:editable name="blog_image" crop="1" width='610' height='150' type="image" />
    <cms:editable name="intro_image" type="image" />
    <cms:editable name="profile_splash_image" type="image" />

    <cms:repeatable name='latest_project_column'>
        <div class="col">
            <cms:editable name="column_title" title="Column Title" type="richtext">
                <h2>Golden Panda Range</h2>
            </cms:editable>
            <cms:editable name="column_content" title="Column Content" type="richtext">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sollicitudin lorem id nisl sollicitudin, et pellentesque
                    lacus cursus. Aliquam pellentesque eros eros, vitae convallis sem scelerisque vel. Integer sit amet nibh
                    ligula. Praesent purus leo, ullamcorper id tellus eget, vehicula hendrerit ante.
                </p>
            </cms:editable>
            <cms:editable name="latest_project_image" title="Latest Project Image" type="image" />

        </div>
    </cms:repeatable>

    <cms:editable name="company_address" title="Company Address" type="richtext" />
    <cms:editable name="company_email" title="Company Address" type="text" />
    <cms:editable name="company_phone" title="Company Address" type="text" />

</cms:template>



<!-- 
    END OF TEMPLATE 
-->



<?php include './includes/header.php' ?>

<div class="main-container company-profile">
    <div class="main-wrapper">

        <div class="splash" style="background-image:url('<cms:show profile_splash_image />')">
            
            <div class="black-overlay"></div>

            <div class="divider-outer-container">
                <div class="divider">
                    <img class="marker" src="img/diamond-marker-white.svg" alt="Marker" />
                </div>
            </div>
            
            <div class="splash-inner-container">
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

        </div>
        <div class="main-content">

            <div class="intro-section">

                <div class="intro-text">
                    <cms:show profile_intro />
                </div>

                <img src="<cms:show intro_image />" alt="Intro Image" />
            </div>

            <div class="divider-outer-container">
                <div class="divider">
                </div>
            </div>

            <div class="latest-projects-section">
                <h1>Latest Projects</h1>

                <div class="column-container">

                    <cms:show_repeatable 'latest_project_column'>

                        <div class="col">
                            <cms:show column_content />
                            <img src="<cms:show latest_project_image />" />
                        </div>

                    </cms:show_repeatable>

                    <div>
                    </div>
                </div>
            </div>

        </div>
        <div class="profile-details-section">
            <div class="blocks">
                <div class="inner-block">
                    <h1>
                        <cms:show k_page_title />
                    </h1>
                    <a class="outline-btn">Visit Official Page</a>
                    <a class="outline-btn">Download Profile</a>
                </div>
                <div class="divider-outer-container">
                    <div class="divider"></div>
                </div>
                <div class="inner-block">
                    <h1>
                        Where Are We?
                    </h1>
                    <p><cms:show company_address /></p>
                </div>
                <div class="divider-outer-container">
                    <div class="divider"></div>
                </div>
                <div class="inner-block">
                    <h1>
                        Contact Us
                    </h1>
                    <span class="contact"><strong>Email:</strong><p><cms:show company_email /></p></span>
                    <span class="contact"><strong>Telephone:</strong><p><cms:show company_phone /></p></span>
                </div>
            </div>
        </div>
        <!-- Main container ends in footer -->
        <?php include './includes/footer.php' ?>