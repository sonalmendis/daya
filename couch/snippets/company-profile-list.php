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