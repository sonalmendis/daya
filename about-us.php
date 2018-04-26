<?php include './includes/head.php' ?>
<cms:template title="About Us" />

<?php include './includes/header.php' ?>

<cms:template title="About us">
    <cms:editable name="profile_intro" order="10" label="Intro Text" desc="The opening paragraph text" type="richtext" >
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
</cms:template>




<div class="main-container">
    <div class="main-wrapper">
    	<cms:editable name='main_content' type='richtext'> 
    	<h1>THIS IS SOME SAMPLE TEXT</h1>
    	</cms:editable>

    	<cms:show profile_intro />
    </div>
    <!-- #main -->
</div>
<!-- #main-container -->


<?php include './includes/footer.php' ?>