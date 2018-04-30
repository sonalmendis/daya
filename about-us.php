<?php include './includes/head.php' ?>
<cms:template title="About Us" />

<?php include './includes/header.php' ?>

<cms:template title="About us">

    <cms:editable name="splash_image" order="1" label='Splash Image' quality="100" desc='The first image that appears on a company profile page and the image used to its corresponding home page block' show_preview='1' width="1600" type="image" />

    <cms:editable name="about_intro" order="2" label="Intro Text" desc="The opening paragraph text" type="richtext" >
        <p>
	        In 1984, Daya Group (Pvt) Ltd commenced operations, starting out initially as a construction company. Over the years, it
	        has expanded into one of Sri Lanka’s pre-eminent privately owned conglomerates, continuing to grow
	        through strategic investments. While having a strong emphasis on quality and performance, our company
	        strives to achieve excellence in customer satisfaction.
        </p>
    </cms:editable>

	<cms:repeatable name='directors' label="Directors" desc="Add as many images as you need" order="3">
    	
    	<cms:editable name="director_image" label="Director's Image" quality="100" desc='Portrait of director.' show_preview='1' width="300" type="image" />

    	<cms:editable name="director_title" label="Director's title" type="text">CEO</cms:editable>

    	<cms:editable name="director_name" label="Director's name" type="text" />

    </cms:repeatable>

	<cms:repeatable name='awards_image' label="Award images" desc="Add as many images as you need" order="4">
    	
    	<cms:editable name="award_img" label="Image of award" quality="100" show_preview='1' width="300" type="image" />

    </cms:repeatable>

    <cms:editable name="awards_intro" label="Awards Introduction Header" type="text" order="5" />

	<cms:repeatable name='awards' label="Awards" desc="Add as many awards as you need." order="6">
    	
    	<cms:editable name="award" label="Award" type="richtext">
    		<h3>This is the name of the award</h3>

    		<p>This is a concise description of it.</p>
    	</cms:editable>

    </cms:repeatable>

</cms:template>




<!-- 
END OF TEMPLATE
 -->



<div class="main-container about-us">
    <div class="main-wrapper">

        <div class="splash" style="background-image:url('<cms:show splash_image />')">

            <div class="black-overlay"></div>

            <div class="header-container">
                <div class="static-header">
                    <a href="index.php">
                        <img src="img/logo.svg" alt="Logo" />
                        <h3>Daya Group of Companies</h3>
                    </a>
                    <div class="static-header-links">
                        <a href="#services">About Us</a>
                        <a href="#about">Contact Us</a>

                        <div class="static-dropdown">

                            <span>
                                <a>Companies &#8811</a>
                            </span>

                            <div class="static-dropdown-content">
                                <a href="#">Company 1</a>
                                <a href="#">Company 2</a>
                                <a href="#">Company 3</a>
                            </div>

                        </div>

                        <a href="#contact">Board of Directors</a>
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
    		</div>

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
	    			<cms:show_repeatable 'awards_image'>
	    				<img src="<cms:show award_img />" />
					</cms:show_repeatable>
				</div>

				<div class="awards_txt">
					<h2> <cms:show awards_intro /> </h2>

					<cms:show_repeatable 'awards'>
						<cms:show award />
					</cms:show_repeatable>
				</div>
			</div>



    	</div>

<!-- Closing tags for main, main-container inside footer.php -->
<?php include './includes/footer.php' ?>