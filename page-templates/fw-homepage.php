<?php
/**
 * Template Name: Homepage Full Width
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

?>
<div class="wrapper" id="full-width-page-wrapper">
	<div>
		<ul class="list-unstyled list-inline social-sidebar text-center">
			<li class="list-inline-item"><a href="https://www.facebook.com/jordy.yeoman"><i class="fa fa-facebook"
						style="margin-left:2px;"></i></a></li>
			<li class="list-inline-item"><a href="https://twitter.com/JordyYeoman"><i class="fa fa-twitter"></i></a>
			</li>
			<li class="list-inline-item"><a href="https://www.instagram.com/jordy_yeoman/"><i
						class="fa fa-instagram"></i></a></li>
			<li>
				<div class="social-line">-</div>
			</li>
			<li class="social-share font-Lovelo">SHARE</li>
		</ul>
	</div>
	<div id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<div class="container-hero container">
						<div class="row position-relative">
							<div class="hero-text-container col-md">
								<h6><span class="dash-line">-</span>Introduction</h6>
								<h1 class="text-white">I Am A</h1>
								<!-- Text animation -->
								<h1 class="ml4">
									<span class="letters letters-1">Builder</span>
									<span class="letters letters-2">Fanboy</span>
									<span class="letters letters-3">Yeoman</span>
									<span class="letters letters-4">Coder</span>
									<span class="letters letters-5">Designer</span>
									<span class="letters letters-6">Youtuber</span>
								</h1>
								<!-- End Text Animation -->
								<p class="hero-text-description">Upgrade & adapt, learn to build and improve yourself
									physically & mentally. <br>Join me
									on my journey to try upgrade myself through electronics, bio-hacking and much more!
								</p>
								<a href="#">
									<div class="hero-video-navigation">
										<div class="text-white">Watch Latest Video Now!</div>
										<div class="circle-play-button">></div>
									</div>
								</a>
								<div>
								</div>
							</div>
							<div class="hero-image-container col-md">
								<img class="hero-image" style="margin-right:-5%;"
									src="<?php echo get_template_directory_uri(); ?>/src/assets/ARC-reactor.png">
								
								</div>
								<!-- // Transparent Ironman Images - Background -->
								<img class="hero-image-bg-transparent hero-t-1 position-absolute"
									src="<?php echo get_template_directory_uri(); ?>/src/assets/Ironman-PNG.png">
									
						</div>
					</div>
					<section>
						<div class="wrapper-bg">
							<img class="section-1-corner" style="margin-right:-5%;"
								src="<?php echo get_template_directory_uri(); ?>/src/assets/dots.png">
							<img class="section-1-corner2" style="margin-right:-5%;"
								src="<?php echo get_template_directory_uri(); ?>/src/assets/dots.png">
							<div class="wrapper-bg-clip container">
								<h4 class="t-text">IMPROVE</h4>
							</div>
							<div class="d-flex w-100 align-items-center pt-6" style="z-index:2">
								<div class="w-50 position-relative "><img class="first-content-image"
										src="<?php echo get_template_directory_uri(); ?>/src/assets/drone-red.jpg">
									<!-- <div class="circle-container">
										<div class="circle1">
											<div class="circle2">
												<div class="circle3">
													>
												</div>
											</div>
										</div>
									</div> -->
								</div>
								<div class="w-50 text-block-first">
										<h6 class="intro-top"><span class="dash-line">-</span>Introduction</h6>
									<h2>My name is <span class="different-text">Jordy</span></h2>
									<p>I <strong>love</strong> to build, create and learn all things technology,
										programming and health. I'm also a massive fanboy for
										<strong>Ironman</strong>. <br>My goal with this website is to help teach,
										collaborate and learn alongside a <strong>community</strong> of other
										like-minded individuals to build a better world.</p>
									<br>
									<p>There are many questions I would like to answer:</p>
									<ul class="pb-4">
										<li>How fast can I learn a new subject?</li>
										<li>How far can I push my body?</li>
										<li>How can we build Ironman?</li>
									</ul>
									<div><a class="join-team-button p-3" href="#">Join the team!</a></div>
								</div>
							</div>
						</div>
					</section>
					<section>
						
						<div class="container">
							<div class="d-flex w-100 align-items-center pt-6" style="z-index:2">
								<div class="w-50">
									<div class="">
									<img class="hero-image-bg-transparent hero-t-2 position-absolute" 
									src="<?php echo get_template_directory_uri(); ?>/src/assets/ironmanflyingtowards.png">

										
										<h6><span class="dash-line">-</span>Introduction</h6>
										<h1 class="text-white">I Am A</h1>
										<p class="">Upgrade & adapt, learn to build and improve yourself
											physically & mentally. <br>Join me
											on my journey to try upgrade myself through electronics, bio-hacking and
											much more!
										</p>
										<a href="#">
											<div class="">
												<div class="text-white">Watch Latest Video Now!</div>
												<div class="circle-play-button">></div>
											</div>
										</a>
										<div>
										</div>
									</div>
								</div>
								<div class="w-50"><img class="" style="margin-right:-5%;"
										src="<?php echo get_template_directory_uri(); ?>/src/assets/circuitboard4.png">
								</div>
							</div>
						</div>
					</section>
					<!-- Start Test Section -->
					<section>
						<div class="container">
							<div class="d-flex w-100 align-items-center pt-6 position-relative" style="z-index:2">
								<div class="lg-bg-text position-absolute">ADAPT</div>
								<div class="card-container">
									<div class="holographic-card d-flex">
										<div class="w-50 p-4">
											<div class="bg-white py-10 w-90">
											<img class="w-90"
												src="<?php echo get_template_directory_uri(); ?>/src/assets/contact.jpg">
</div>
											</div>
										<div class="w-50 py-5 pr-4">
											<h2>Sign Up</h2>
											<p>Access to all of my exclusive videos, learn how to become a bio-hacker
												like myself.</p>
											<form>
												<input>Email Address</input>
												<input>Password</input>
												<button>Sign Up</button>
											</form>
											<p>By clicking on Sign up, you agree to our terms of service and privacy
												policy.</p>
											<div>---------</div>
											<p>Already have an account?<a>Sign In</a></p>
											<p>Forgot password?<a>Reset</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Test Section -->
					<section>
						<div class="wrapper-bg container">
							<div class="wrapper-bg-clip"></div>
							<div class="pt-6">
								<h1 class="text-center pb-4 position-relative">What do I do?</h1>
								<div class="row text-left">
									<div class="col-md-3 mb-4">
										<div class="position-relative lg-shadow">
											<h3 class="rotaterino position-absolute"><span
													class="bg-light p-2 justify-content-center l-shadow">Build</span>
											</h3>
											<div class="buffer-space bg-gradient-orange"></div>
											<p class="p-2 font-Oswald">I build Electronics, Woodwork, 3D Models</p>
										</div>
									</div>
									<div class="col-md-3 mb-4">
										<div class="lg-shadow position-relative">
											<h3 class="rotaterino position-absolute"><span
													class="bg-light p-2 justify-content-center l-shadow">Repair</span>
											</h3>
											<div class="buffer-space bg-gradient-aqua"></div>
											<p class="p-2 font-Oswald">I build Electronics, Woodwork, 3D Models</p>
										</div>
									</div>
									<div class="col-md-3 mb-4">
										<div class="lg-shadow position-relative">
											<h3 class="rotaterino position-absolute"><span
													class="bg-light p-2 justify-content-center l-shadow">Exercise</span>
											</h3>
											<div class="buffer-space bg-gradient-yellow"></div>
											<p class="p-2 font-Oswald">I build Electronics, Woodwork, 3D Models</p>
										</div>
									</div>
									<div class="col-md-3 mb-4">
										<div class="lg-shadow position-relative">
											<h3 class="rotaterino position-absolute"><span
													class="bg-light p-2 justify-content-center l-shadow">Code</span>
											</h3>
											<div class="buffer-space bg-gradient-azure"></div>
											<p class="p-2 font-Oswald">I build Electronicsss, Woodwork, 3D Models</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Container Close -->
						</div><!-- Wrapper-bg Close -->
					</section>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js" type="text/javascript">
</script>
<?php
	get_footer();
	?>
