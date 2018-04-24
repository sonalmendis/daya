<cms:pages masterpage='company-profile.php'>

        <a href="<cms:show k_page_link />" class="industry-block">

            <div class="black-overlay"></div>
            <img src="<cms:thumbnail splash_image width='400' height='400' crop='1'/>" alt="image" />
            <div class="inner-container">
                <h3>
                    <cms:show category_for_front_page />
                </h3>
                <h1>
                    <cms:show k_page_title />
                </h1>
                <div class="btn small" class="btn small">Learn More</div>
            </div>

        </a>
 
</cms:pages>