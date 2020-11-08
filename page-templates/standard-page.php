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
    <div class="container">
        <div class="row" style="padding-left:15%;">
            <div class="col-md-12">
                <div class="py-5">
                    <h1 style="font-size:3.5rem;"><?php echo the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative">
    <div class="wrapper position-absolute clipContainer-bg"></div>
    <div class="wrapper position-relative clipContainer" id="full-width-page-wrapper"
        style="padding-bottom:0!important;">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" style="min-height:100vh;">
            <span style="color:black;">
                <div class="row standard-pad-mob" style="padding-left: 10%;">

                    <div class="col-md-12 content-area" id="primary">

                        <main class="d-flex justify-content-between px-5 row m-rev" id="main" role="main"
                            style="padding-right:0!important;">

                            <div class="col-12 col-md-6 pt-4">
                                <?php echo the_content(); ?>
                                <div class="d-flex justify-content-center pt-4">
                                    <a href="#">
                                        <div class="join-team-btn shadow-light">
                                            <h3>Join the team!</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="d-flex align-items-center flex-column col">
                                <?php the_post_thumbnail(); ?>
                                <p class="standard-page-p" style="font-size: 10px;">Selfie bruh.</p>
                            </div>


                        </main><!-- #main -->

                    </div><!-- #primary -->

                </div><!-- .row end -->
                <div class="row standard-pad-mob" style="padding-left: 10%; padding-top: 32px;">

                    <div class="col-md-12 content-area" id="primary">



                    </div><!-- #primary -->

                </div><!-- .row end -->

                <div class="row standard-pad-mob" style="padding-left: 10%; padding-top: 128px;">

                    <div class="col-md-12 content-area d-flex justify-content-center flex-column align-items-center"
                        id="primary">
                        <h3>Recent Work: </h3>

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
                                <div class="col-lg-4 swiper-slide pl-0 pr-0">
                                    <?php 
							get_template_part('loop-templates/projects-content-single', get_post_format());
						?>
                                </div>


                                <?php
                    endwhile; wp_reset_query();
                    ?>
                            </div><!-- Swiper-wrapper END -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div><!-- Swiper-container END -->
                    </div><!-- #primary -->

                </div><!-- .row end -->

            </span>

        </div><!-- #content -->




        <div class="wrapper overflow-container position-relative clipContainer2" id="full-width-page-wrapper">
            <div class="bg-color-container bg-cont1 position-absolute"></div>
            <div class="bg-color-container bg-cont2 position-absolute"></div>
            <div class="container" style="padding-bottom:6rem; padding-top:8rem!important;">
                <div class="row m-row-rev" style="padding-left: 10%;">

                    <div class="col-12 col-md-6">
                        <h3 class="mob-txt-cntr">Interested in collaborating on a project?</h3>
                        <div class="d-flex flex-column">
                            <ul>
                                <li>Share your ideas</li>
                                <li>Coding collaborations</li>
                                <li>Challenge me to build something</li>
                                <li>Or just share the love and come for a chat!</li>
                            </ul>
                            <div class="d-flex justify-content-center justify-content-md-left pt-4">
                                <a href="https://discord.gg/6GUB8UYz8Q">
                                    <div class="join-team-btn shadow-light">
                                        <h3>Jump In!</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="https://discord.gg/6GUB8UYz8Q">
                            <div class="d-flex flex-column align-items-center">
                                <img class="bounce-btn disc-mob"
                                    src="<?php echo get_template_directory_uri(); ?>/src/assets/Discord-Logo-White.png"
                                    style="max-width: 40%; transform:rotate(1deg);">
                                <img class="bounce-btn disc-mob"
                                    src="<?php echo get_template_directory_uri(); ?>/src/assets/Discord-Wordmark-White.png"
                                    style="max-width: 40%; transform:rotate(1deg);">

                            </div>
                        </a>

                    </div>

                </div><!-- #primary -->

            </div><!-- .row end -->

            <img class="mob-repair" src="<?php echo get_template_directory_uri(); ?>/src/assets/repairman.png"
                style="max-width: 20%; bottom: -10px; position:absolute; transform: scaleX(-1);">
        </div>

    </div><!-- #full-width-page-wrapper -->

</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 400,
        modifier: 1,
        slideShadows: false,
    },
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});
</script>
<?php
get_footer();