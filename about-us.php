<?php include './includes/head.php' ?>
<cms:template title="About Us" />

<?php include './includes/header.php' ?>

<cms:template title="About us">

	<cms:editable name="splash_image" order="1" label='Splash Image' quality="100" desc='The first image that appears on a company profile page and the image used to its corresponding home page block'
	    show_preview='1' width="1600" type="image" />
	<cms:editable name="black_overlay_toggle" order="2" label="Black Overlay" desc="Enable opaque black overlay over splash image?"
	    opt_values='Yes=display:block | No=display:none' type='radio' />

	<cms:editable name="about_intro" order="3" label="Intro Text" desc="The opening paragraph text" type="richtext" css='/css/main.css' toolbar='custom' custom_toolbar="<cms:embed 'no_format.inc' />" >
		<p>
			In 1984, Daya Group (Pvt) Ltd commenced operations, starting out initially as a construction company. Over the years, it
			has expanded into one of Sri Lanka’s pre-eminent privately owned conglomerates, continuing to grow through strategic investments.
			While having a strong emphasis on quality and performance, our company strives to achieve excellence in customer satisfaction.
		</p>
	</cms:editable>

	<cms:repeatable name='directors' label="Directors" desc="Add as many images as you need" order="4">

		<cms:editable name="director_image" label="Director's Image" quality="100" desc='Portrait of director.' show_preview='1'
		    width="300" type="image" />

		<cms:editable name="director_title" label="Director's title" type="text">CEO</cms:editable>

		<cms:editable name="director_name" label="Director's name" type="text" />

	</cms:repeatable>

	<cms:editable name="awards_intro" label="Awards Introduction Header" type="text" order="6" />

	<cms:repeatable name='awards' label="Awards" desc="Add as many awards as you need." order="7">

		<cms:editable name="award" label="Award Title" type="text" css='/css/main.css' toolbar='custom' custom_toolbar="<cms:embed 'no_format.inc' />" >
		</cms:editable>

		<cms:editable name="award_desc" label="Award Description" type="text" css='/css/main.css' toolbar='custom' custom_toolbar="<cms:embed 'no_format.inc' />" >
		</cms:editable>
	</cms:repeatable>

</cms:template>




<!-- 
END OF TEMPLATE
 -->



<div class="main-container about-us">
	<div class="main-wrapper">

		<div class="splash" style="background-image:url('<cms:show splash_image />')">

			<div class="black-overlay" style="<cms:show black_overlay_toggle />"></div>

			<div class="header-container">
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

						<a href="#board">Board of Directors</a>
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
					<h1>About Us</h1>
				</div>

				<div class="divider-outer-container">
					<div class="divider">
						<img class="marker" src="img/diamond-marker-white.svg " alt="Marker" />
					</div>
				</div>
			</div>
		</div>

		<div class="main-content">

			<div class="intro">
				<div class="intro-img">
					<img src="img/logo.svg">
				</div>

				<cms:show about_intro />
			</div>

			<div class="timeline">

				<section class="cd-timeline js-cd-timeline">
					<h1>Timeline of Our History</h1>
					<div class="cd-timeline__container">
						<img class="grey-marker one" src="img/timeline/grey-marker.svg" alt="Grey Marker" />
						<div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
								<img src="img/timeline/construction.svg" alt="Picture">
							</div>
							<!-- cd-timeline__img -->

							<div class="cd-timeline__content js-cd-content">
								<h3>The birth of Daya Group</h3>
								<div class="seperator"></div>
								<p>In 1984, Daya Group (Pvt) Ltd commenced operations, starting out initially as a construction company</p>
							</div>
							<!-- cd-timeline__content -->
						</div>
						<!-- cd-timeline__block -->

						<div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
								<img src="img/timeline/road.svg" alt="Movie">
							</div>
							<!-- cd-timeline__img -->

							<div class="cd-timeline__content js-cd-content">
								<h3>The Road to Success</h3>
								<div class="seperator"></div>
								<p>Daya quickly made quantum progress with his construction company, Daya Construction (Private) Limited. It was the
									first local contractor ever to lead World Bank funded road sector development project for the Ampara – Mahaoya Road</p>
							</div>
							<!-- cd-timeline__content -->
						</div>
						<!-- cd-timeline__block -->

						<div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
								<img src="img/timeline/apparel.svg" alt="Picture">
							</div>
							<!-- cd-timeline__img -->

							<div class="cd-timeline__content js-cd-content">
								<h3>Daya apparel</h3>
								<div class="seperator"></div>
								<p>Daya soon submerged himself in the business arena and in 1992, he entered into the garment manufacturing industry.
									Daya Apparel Export (Private) Limited now has well-established 07 factories in Ampara and Sevanagala providing employment
									to over 4,000 people.</p>
							</div>
							<!-- cd-timeline__content -->
						</div>
						<!-- cd-timeline__block -->

						<div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--location js-cd-img">
								<img src="img/timeline/finance.svg" alt="Location">
							</div>
							<!-- cd-timeline__img -->

							<div class="cd-timeline__content js-cd-content">
								<h3>Growth</h3>
								<div class="seperator"></div>
								<p>In 2002, Daya Group purchased Sevanagala Sugar Industries Limited which was running at an operational loss of over
									Rs. 150 million annual. Within a short span of 2 years, the management team transformed the business, improving
									its capacity by 300%.</p>
							</div>
							<!-- cd-timeline__content -->
						</div>
						<!-- cd-timeline__block -->

						<div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--location js-cd-img">
								<img src="img/timeline/aviation.svg" alt="Location">
							</div>
							<!-- cd-timeline__img -->

							<div class="cd-timeline__content js-cd-content">
								<h3>Daya Aviation</h3>
								<div class="seperator"></div>
								<p>The investment in a six seater aircraft catapulted the start of Daya Aviation (Private) Limited. In 2008, Daya Aviation
									managed to purchase a 19 seater aircraft, which currently operates in the USA.</p>
							</div>
							<!-- cd-timeline__content -->
						</div>
						<!-- cd-timeline__block -->
						<img class="grey-marker two" src="img/timeline/grey-marker.svg" alt="Grey Marker" />
					</div>
				</section>
				<!-- cd-timeline -->

			</div>

			<span class="anchor" id="board"></span>
			<h1>Board of Directors</h1>

			<div class="board">

				<cms:show_repeatable 'directors'>
					<div class="director_card">
						<img src="<cms:show director_image />" />

						<h3>
							<cms:show director_title />
						</h3>

						<h2>
							<cms:show director_name />
						</h2>
					</div>
				</cms:show_repeatable>
			</div>

			<div class="achievements">
				<h1>Achievements</h1>

				<div class="awards_images">
					<img src="img/awards-top.jpg" />
				</div>

				<div class="awards_txt">
					<h2>
						<cms:show awards_intro /> </h2>

					<cms:show_repeatable 'awards'>
						<h4><cms:show award /></h4>
						<p><cms:show award_desc /></p>
					</cms:show_repeatable>
				</div>
			</div>



		</div>

		<!-- Closing tags for main, main-container inside footer.php -->
		<?php include './includes/footer.php' ?>