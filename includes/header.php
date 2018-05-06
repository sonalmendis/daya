<body>
	<!-- Ends in footer file -->
	<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
	<div class="preloader">
		<div>
			<img class="logo" src="img/logo.svg" alt="Logo" />
			<img rel="preload" as="image" class="loader" src="img/loading.gif" alt="loading icon" />
			<h3>Loading</h3>
		</div>
	</div>

	<div class="header-black-overlay"></div>
	<div class="header-container">
		<header class="header-wrapper">

			<nav>

				<div class="fixed-header-bar">
					<div class="fixed-header-inner">

						<div class="fixed-header-inner-inner">

							<div class="daya-index-anchor">
								<a href="index.php">
									<img src="img/logo.svg" alt="Logo" />
									<h3>Daya Group of Companies</h3>
								</a>
							</div>

							<button class="nav-toggle">
								<img src="img/hamburger-menu.svg">
							</button>

							<button class="nav-toggle-cross">
								<img src="img/cross.svg">
							</button>

						</div>

						<div class="fixed-header-mobile">

							<ul class="nav-list">
								<li>
									<a href="about-us.php">About Us</a>
								</li>
								<li>
									<a href="contact-us.php">Contact Us</a>
								</li>
								<li>
									<a href="about-us.php#board">Board of Directors</a>
								</li>
								<li>
									<a href="#!">Companies &nbsp</a>
									<div class="nav-dropdown">
										<div class="dropdown-content">
											<cms:pages masterpage='company-profile.php'>
												<a class="hvr-grow-shadow" href="<cms:show k_page_link />">
													<h3>
														<cms:show k_page_title />
													</h3>
													<img src="<cms:thumbnail splash_image width='400' height='400' crop='1'/>" alt="<cms:show k_page_title /> Image" />
													<div class="black-overlay"></div>

												</a>
											</cms:pages>
										</div>
									</div>
								</li>
							</ul>
						</div>


						<div class="fixed-header-links">
							<a href="about-us.php">About Us</a>
							<a href="contact-us.php">Contact Us</a>

							<div class="dropdown">

								<span>
									<a href="index.php#companies">Companies ▾</a>
								</span>

								<div class="dropdown-content-outer">
									<div class="dropdown-content">
										<cms:pages masterpage='company-profile.php'>
											<a class="hvr-grow-shadow" href="<cms:show k_page_link />">
												<h3>
													<cms:show k_page_title />
												</h3>
												<img src="<cms:thumbnail splash_image width='400' height='400' crop='1'/>" alt="<cms:show k_page_title /> Image" />
												<div class="black-overlay"></div>

											</a>
										</cms:pages>
									</div>
								</div>
							</div>

							<a href="about-us.php#board">Board of Directors</a>
						</div>
					</div>
				</div>


				<!-- 		<div class="nav-bar fixed-header-mobile">
				<img class="nav-img" src="img/logo-icon.svg">
				<div class="nav-icon">
					<button class="hamburger">&#9776;</button>
		  		<button class="cross hidden">&#735;</button>
	  		</div>
			</div>

			<div class="fixed-header-mobile menu">
				<a class="nav-menu visuallyhidden" href="#services"><span class="nav-text">Our services</span></a>
				<a class="nav-menu visuallyhidden" href="#about"><span class="nav-text">About us</span></a>
				<a class="nav-menu visuallyhidden" href="#contact"><span class="nav-text">Contact us</span></a>
			</div> -->

			</nav>

		</header>
	</div>
	<!-- End header -->