<?php
/**
 * Template Name: Standard Page Layout
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
<!-- Clip Path Seperator -->
<div class="wrapper position-relative" id="full-width-page-wrapper">
					<div class="container"><div class="row"  style="padding-left:15%;"><div class="col-md-12">
					<div class="py-5">
						<h1 style="font-size:3.5rem;">About me!</h1>
					</div>
					</div></div></div>
</div>
<div class="position-relative">
<div class="wrapper position-absolute clipContainer-bg"></div>
<div class="wrapper position-relative clipContainer" id="full-width-page-wrapper" style="padding-bottom:0!important;">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" style="min-height:100vh;">
		<span style="color:black;">
		<div class="row" style="padding-left: 10%;">

			<div class="col-md-12 content-area" id="primary">

				<main class="d-flex justify-content-between px-5 row" id="main" role="main" style="padding-right:0!important;">
					
					<div class="col-6"><h3>Hey Legends,</h3>
						<p class="standard-page-p">Thank you for visiting my site and checking out some of the content! I truly hope that you will learn something here, be able to improve your own life in some way & maybe we can even work together on projects. I love working as a team with anyone, give me a <strong>Hollahhhh!</strong></p>
							<br>
						<p class="standard-page-p">My goal with this site is to grow a community of like minded individuals, who, as a team we can collaborate, combine forces and <strong>dominate!</strong></p>
							<br>
							<p class="standard-page-p">If you leave this site <strong>inspired</strong> to go out and build something for the better of humanity, then well, my job here is done.</p>

					</div>
					<div class="d-flex align-items-center flex-column col">
					<img class=""
									src="<?php echo get_template_directory_uri(); ?>/src/assets/inventor-man.jpg" style="max-width: 40%; transform:rotate(1deg);">
									<p class="standard-page-p">Image bruh.</p>
									</div>
					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		<div class="row" style="padding-left: 10%; padding-top: 32px;">

			<div class="col-md-12 content-area" id="primary">

				<div class="col-6 d-flex justify-content-center">
					<a href="#">
						<div class="join-team-btn shadow-light"><h3>Join the team!</h3></div>
					</a>
				</div>

			</div><!-- #primary -->

		</div><!-- .row end -->
		
		<div class="row" style="padding-left: 10%; padding-top: 128px;">

			<div class="col-md-12 content-area d-flex justify-content-center flex-column align-items-center" id="primary">
					<h3>Recent Projects: </h3>
					
				<div class="swiper-container">
					<div class="swiper-wrapper">
<!-- 
				// Bring in the 5 most recent posts // -->
				<?php

				$loop = new WP_Query( array(
                    'post_type' => 'post',  
                    'posts_per_page' => 5,
                    'order'   => 'DESC',
                    ));
                    while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="col-lg-4 swiper-slide">
						<?php 
							get_template_part('loop-templates/projects-content-single', get_post_format());
						?>
					</div>


					<?php
                    endwhile; wp_reset_query();
                    ?>
					</div><!-- Swiper-wrapper END -->
					<div class="swiper-pagination"></div>
				</div><!-- Swiper-container END -->
			</div><!-- #primary -->

		</div><!-- .row end -->

		</span>
		
	</div><!-- #content -->




	<div class="wrapper position-relative clipContainer2" id="full-width-page-wrapper">
<div class="container pt-5" style="padding-bottom:6rem; padding-top:8rem!important;">
<div class="row">
			

					<div class="col-6">
						<h3>Interested in collaborating on a project?</h3>
						<div class="d-flex flex-column">
							<ul>
								<li>Share your ideas</li>
								<li>Coding collaborations</li>
								<li>Challenge me to build something</li>
								<li>Or just share the love and come for a chat!</li>
							</ul>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex flex-column">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/src/assets/Discord-Logo-White.png" style="max-width: 40%; transform:rotate(1deg);">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/src/assets/Discord-Wordmark-White.png" style="max-width: 40%; transform:rotate(1deg);">
									
									</div>
						
					</div>
				
			</div><!-- #primary -->

		</div><!-- .row end -->
		</div>

</div><!-- #full-width-page-wrapper -->
</div>

<?php
get_footer();




