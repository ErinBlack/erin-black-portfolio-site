<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>

<?php get_header()
/** Get the main header*/
?>

<div class="bkg-img">
  <div class="header-div">
    <div class="head-logo">
      <img id="logo-img"src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/erin-black-logo-white.png">
    </div>
    <nav class="home-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); /*wp_list_pages( '&title_li=');*/ ?>
    </nav>
  </div>



  <!-- Start Image Text -->
			<div class="img-text">
				<p id="img-text-1">DESIGN SOLUTIONS</p>
				<P id="img-text-2">BRAND</P>
				<P id="img-text-3">Strategies</P>
				<p id="img-text-4">development + design + marketing</p>
				<div id="learn-more-outside">
					<div id="learn-more">Learn More</div>
				</div>
			</div>

		<!-- End Image Text -->
</div>

<!-- Start Index Body Copy -->
		<div class="content">
			<div class="wrapper">
				<div class="index-body">

				<!-- Start Skills Tiles Heater-->
				<div class="index-header">
					<h1>Erin Black</h1>
					<h2>Web Development + Web Design </br> Marketing + SEO </h2>
				</div>

					<!-- Start Skills Tiles-->
					<div class="skills-tiles">
            <div class="tiles">
              <a href="https://github.com/ErinBlack/"><img src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/github.png"
              alt="Github Icon"></a>
                <h3><a href="https://github.com/ErinBlack/">My Github</a></h3>

            </div>
						<div class="tiles">
              <img src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/resume.png"
              alt="Resume Icon">
              <h3>Resume</h3>
            </div>
						<div class="tiles">
              <img src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/myWork.png"
              alt="My Work Icon">
              <h3>Work</h3>
            </div>
						<div class="tiles">
              <img src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/contact.png"
              alt="Contact Icon">
              <h3>Contact</h3>
            </div>
					</div>

					<!-- End Name and Intro -->


				</div>
			</div>


<?php get_footer();
