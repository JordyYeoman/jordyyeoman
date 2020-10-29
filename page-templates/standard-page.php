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
					<div class="container"><div class="row"><div class="col-md-12">
					<div class="py-5">
						<h1>About me!</h1>
					</div>
					</div></div></div>
</div>
<div class="position-relative">
<div class="wrapper position-absolute clipContainer-bg"></div>
<div class="wrapper position-relative clipContainer" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" style="min-height:100vh;">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					
					<div>Hello World.</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
</div>

<?php
get_footer();
