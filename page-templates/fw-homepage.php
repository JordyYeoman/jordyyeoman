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
                            <div class="hero-text-container col-12 col-md-6">
                                <h6><span class="dash-line">-</span>Introduction</h6>
                                <h1 class="text-white home-header-text">I Am A</h1>
                                <!-- Text animation -->
                                <h1 class="ml4">
                                    <span class="letters letters-1">Builder</span>
                                    <span class="letters letters-2">Repairman</span>
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

                                <div class="hero-video-navigation">

                                    <div class="text-white"><a href="#" class="link-button">Watch Latest Video Now!</a>
                                    </div>
                                    <div class="circle-play-button"><a href="#" class="link-button">></a></div>

                                </div>
                            </div>
                            <div class="hero-image-container col-12 col-md-6">
                                <img class="hero-image" style="margin-right:-5%;"
                                    src="<?php echo get_template_directory_uri(); ?>/src/assets/ARC-reactor.png">
                            </div>
                            <!-- // Transparent Ironman Images - Background -->
                            <img class="hero-image-bg-transparent hero-t-1 position-absolute"
                                src="<?php echo get_template_directory_uri(); ?>/src/assets/robot-arm.svg">
                        </div>
                    </div>
                    <section>
                        <div class="wrapper-bg container">
                            <img class="section-1-corner"
                                src="<?php echo get_template_directory_uri(); ?>/src/assets/dots.png">
                            <div class="wrapper-bg-clip container">
                                <h4 class="t-text">IMPROVE</h4>
                            </div>
                            <div class="d-flex row align-items-center pt-6 container" style="z-index:2">
                                <div class="col-12 col-md-6 position-relative "><img class="first-content-image"
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
                                <div class="col-12 col-md-6 text-block-first">
                                    <h6 class="intro-top"><span class="dash-line">-</span>Introduction</h6>
                                    <h2>My name is <span class="different-text">Jordy</span></h2>
                                    <p>I <strong>love</strong> to build, create and learn all things technology,
                                        programming and health. I'm also a massive fanboy for
                                        <strong>Ironman</strong>. <br>My goal with this website is to help teach,
                                        collaborate and learn alongside a <strong>community</strong> of other
                                        like-minded individuals to build a better world.
                                    </p>
                                    <br>
                                    <p>There are many questions I would like to answer:</p>
                                    <ul class="pb-4">
                                        <li>How fast can I learn a new subject?</li>
                                        <li>How far can I push my body?</li>
                                        <li>How can we build Ironman?</li>
                                    </ul>
                                    <div class="d-flex justify-content-left pt-4">
                                        <a href="#">
                                            <div class="join-team-btn shadow-light">
                                                <h3>Join the team!</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="d-flex row align-items-center pt-6" style="z-index:2">
                                <div class="col-12 col-md-6">
                                    <div class="">
                                        <h6><span class="dash-line">-</span>Hey you, I'm</h6>
                                        <h1 class="text-white">More than just</h1>
                                        <h1 class="text-white">a man....</h1>
                                        <p class="">Challenge yourself to be more than you were yesterday. <br>
                                            In the wise words of Jocko Willink, "What could you be, if you worked as
                                            hard as you could...?"
                                        </p>
                                        <p>Let's take that message and go full throttle, there's nothing stopping you if
                                            you have the right mindset.</p>
                                        <div class="d-flex justify-content-left pt-4">
                                            <a href="#">
                                                <div class="join-team-btn shadow-light">
                                                    <h3>Join the team!</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 position-relative h-100"><img class="hero-t-2"
                                        src="<?php echo get_template_directory_uri(); ?>/src/assets/man-working-with-virtual-reality.svg">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- START What I do Section -->
                    <section class='position-relative d-flex justify-content-center'>
                        <div class="position-absolute w-100 h-100 wrapper-bg-clip container"
                            style="transform:rotateY(180deg);">
                            <h4 class="t-text" style="transform:rotateY(180deg); text-align:right;">Learn</h4>
                        </div>
                        <div class="container">
                            <div class="row m-0 cardStyles position-relative mouseMoveContainer pt-6">
                                <div class="col-12 col-md-6 d-flex flex-column">

                                    <div class="shadow1 w-70 mb-5 position-relative">


                                        <div class="home-card-1 d-flex justify-content-between">
                                            <h4 class="p-4 color-white">Code</h4>
                                            <img class="w-auto pr-4"
                                                src="<?php echo get_template_directory_uri(); ?>/src/assets/laptop.svg">

                                        </div>

                                        <div class="content-container-hover-card">

                                            <p class="p-4 card-para">Programming is fascinating, from learning
                                                Javascript over
                                                the
                                                last year, to now moving into other languages such as python to code
                                                drones!
                                                Check out some of my recent work.</p>

                                            <div class="px-4 pt-0 d-flex justify-content-between card-share-details">

                                                <h6>Latest Posts</h6>
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="anchor-wrapper"></a>
                                    </div>


                                    <div class="shadow1 w-70 mb-5 position-relative">


                                        <div class="home-card-1 bg-gradient2 d-flex justify-content-between">
                                            <h4 class="p-4 color-white">Repair</h4>
                                            <img class="w-auto pr-4"
                                                src="<?php echo get_template_directory_uri(); ?>/src/assets/drone-repair-perth.svg">

                                        </div>

                                        <div class="content-container-hover-card">

                                            <p class="p-4 card-para">From drones to power tools and everything in
                                                between. I love
                                                solving issues on
                                                repair tools, albeit I have a tonne to learn still.</p>

                                            <div class="px-4 pt-0 d-flex justify-content-between card-share-details">

                                                <h6>Latest Posts</h6>
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="anchor-wrapper"></a>
                                    </div>

                                </div>

                                <div class="col-12 col-md-6 text-right d-flex flex-column align-items-end">

                                    <div class="shadow1 w-70 mb-5 mr-3 position-relative">


                                        <div class="home-card-1 bg-gradient3 d-flex justify-content-between">
                                            <h4 class="p-4 color-white">Build </h4>
                                            <img class="w-auto pr-4"
                                                src="<?php echo get_template_directory_uri(); ?>/src/assets/builder-schematics.svg">

                                        </div>

                                        <div class="content-container-hover-card">

                                            <p class="p-4 card-para">There is a strange satisfaction in using your
                                                hands
                                                to
                                                create
                                                things out of wood/metal/other materials. Always learning and
                                                striving
                                                to
                                                build bigger and better projects, have a look at some recent work.
                                            </p>

                                            <div class="px-4 pt-0 d-flex justify-content-between card-share-details">

                                                <h6>Latest Posts</h6>
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="anchor-wrapper"></a>
                                    </div>


                                    <div class="shadow1 w-70 mb-5 mr-3 position-relative">

                                        <div class="home-card-1 bg-gradient4 d-flex justify-content-between">
                                            <h4 class="p-4 color-white">Fitness</h4>
                                            <img class="w-auto pr-4"
                                                src="<?php echo get_template_directory_uri(); ?>/src/assets/jordy-amara-fitness.svg">
                                        </div>
                                        <div class="content-container-hover-card">

                                            <p class="p-4 card-para">Exercise is one of my main passions, I love to
                                                push myself
                                                physically to see how far I can go. The body is one amazing machine.
                                            </p>

                                            <div class="px-4 pt-0 d-flex justify-content-between card-share-details">

                                                <h6>Latest Posts</h6>
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="anchor-wrapper"></a>
                                    </div>

                                </div>
                                <!-- SVG Animation -->
                                <div class="circleAnim-container">
                                    <div class="circle12">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="triangle-pointer"
                                            fill="#00000033" viewBox="0 0 100 100">
                                            <polygon points="50 15, 100 100, 0 100" />
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- ENDOF What I do Section -->
                    <!-- Start Test Section -->
                    <section>
                        <div class="container position-relative mt-132">
                            <div class="position-absolute wrapper-bg-clip container left-0 pl-0 pr-0">
                                <img class="bg-svg"
                                    src="<?php echo get_template_directory_uri(); ?>/src/assets/lets-colab.svg">
                            </div>
                            <div class="d-flex row align-items-center pt-6 position-relative" style="z-index:2">
                                <div class="col-12 col-md-6 p-4">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 py-5 px-5 contact-input">
                                    <h2 style="font-size:4rem;">Let's Collab!</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="63" title="main-contact-form" ]');?>

                                </div>
                            </div>
                        </div>
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