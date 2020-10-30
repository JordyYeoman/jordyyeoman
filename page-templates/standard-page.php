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
						<h1>About me!</h1>
					</div>
					</div></div></div>
</div>
<div class="position-relative">
<div class="wrapper position-absolute clipContainer-bg"></div>
<div class="wrapper position-relative clipContainer" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" style="min-height:100vh;">
		<span style="color:black;">
		<div class="row" style="padding-left: 10%; padding-right:10%;">

			<div class="col-md-12 content-area" id="primary">

				<main class="d-flex justify-content-between px-5" id="main" role="main">
					
					<div style="max-width: 70%;">Hey Legends,
						<p class="standard-page-p">Thank you for visiting my site and checking out some of the content! I truly hope that you will learn something here, be able to improve your own life in some way & maybe we can even work together on projects. I love working as a team with anyone, give me a <strong>Hollahhhh!</strong></p>
					</div>
					<div class="d-flex align-items-center flex-direction: column ">
					<img class="hero-image"
									src="<?php echo get_template_directory_uri(); ?>/src/assets/inventor-man.jpg" style="max-width: 40%; transform:rotate(1deg);">
									Image bruh.
									</div>
					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					
					<div>Np.</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		</span>
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
</div>

<?php
get_footer();
