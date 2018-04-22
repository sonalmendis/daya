<?php include './includes/head.php' ?>

<cms:template title="Company Profile" clonable='1'>
    <cms:editable name="profile_intro" title="Profile Intro" type="richtext" order="1">
        <h1>Who We Are</h1>

        <p>We are Olympus Tea Company, the most recent addition to the ever-growing Sri Lankan conglomerate, Daya Group of Companies.
            With an annual turnover in excess of USD 50 million, Daya Group of Companies is emerging as a leader in several
            areas of business including apparel manufacturing, construction, transport, fashion, micro-banking, household
            and consumer electronics, agriculture, plastics, packaging, printing, aviation and tourism.</p>
    </cms:editable>
    <cms:editable name="blog_image" crop="1" width='610' height='150' type="image" />
</cms:template>

<?php include './includes/header.php' ?>

<div class="main-container">
    <div class="main-wrapper">
        <cms:show profile_intro />
        <img src="<cms:show blog_image />" alt="image" />
    </div>
</div>
<?php include './includes/footer.php' ?>