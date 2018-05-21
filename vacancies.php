<?php include './includes/head.php' ?>
<cms:template title="Vacancies" />

<?php include './includes/header.php' ?>

<cms:template title="Vacancies">

	<cms:editable name="splash_image" order="1" label='Splash Image' quality="100" desc='The first image that appears on a company profile page and the image used to its corresponding home page block' show_preview='1' width="1600" type="image" />
	<cms:editable name="black_overlay_toggle" order="2" label="Black Overlay" desc="Enable opaque black overlay over splash image?" opt_values='Yes=display:block | No=display:none' type='radio' />


</cms:template>




<!-- 
END OF TEMPLATE
 -->



<div class="main-container vacancies">
	<div class="main-wrapper">

		<div class="splash" style="background-image:url('<cms:show splash_image />')">

			<div class="black-overlay" style="<cms:show black_overlay_toggle />"></div>

			<div style="display:none;" class="header-container">
				<div class="static-header">
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

							<!-- 							<div class="static-dropdown-content">
								<a href="#">Company 1</a>
								<a href="#">Company 2</a>
								<a href="#">Company 3</a>
							</div> -->

						</div>

						<a href="vacancies.php">Vacancies</a>
					</div>
				</div>
			</div>

			<div class="splash-outer-container">
				<div class="divider-outer-container">
					<div class="divider">
						<img class="marker" src="img/diamond-marker-white.svg " alt="Marker" />
					</div>
				</div>

				<div class="splash-inner-container">
					<h1>Vacancies</h1>
				</div>

				<div class="divider-outer-container">
					<div class="divider second">
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
			<div class="introText">
				<h1>Join the Daya Team Today!</h1>
				<p>
					Apply for a highly promising career at Daya Group of Companies today! We are always on the look out for talented people to join our team and deliver the best.
					Below is a list of available vacancies, please apply through the box below:
				</p>
			</div>
			<div class="vacanciesBoxContainer">
				<iframe src="http://www.topjobs.lk/dayagroup" height="500" width="980"></iframe>
			</div>



		</div>

		<!-- Closing tags for main, main-container inside footer.php -->
		<?php include './includes/footer.php' ?>