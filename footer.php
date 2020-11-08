<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">


    <!-- <div class="row">

			<div class="col-md-12"> -->

    <footer class="site-footer" id="colophon">

        <div class="site-info">


            <!-- Footer -->
            <section id="footer">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="http://jordyyeoman.local/"><i class="fa fa-angle-double-right"></i>Home</a>
                                </li>
                                <li><a href="http://jordyyeoman.local/about/"><i
                                            class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="http://jordyyeoman.local/tutorials/"><i
                                            class="fa fa-angle-double-right"></i>Tutorials</a></li>
                                <li><a href="http://jordyyeoman.local/to-do/"><i
                                            class="fa fa-angle-double-right"></i>To-Do</a></li>
                                <li><a href="http://jordyyeoman.local/contact/"><i
                                            class="fa fa-angle-double-right"></i>Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Top Projects</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Iron-Heart</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Electric Surfboard</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>iPhone 10 Repair</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>DJI Mavic Pro Repair</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Help the team!</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="https://www.paypal.com/paypalme/jordyyeoman"><i
                                            class="fa fa-angle-double-right"></i>Paypal</a></li>
                                <li><a href="http://www.youtube.com/c/Draxen" class="g-ytsubscribe"
                                        data-channel="Draxen"><i class="fa fa-angle-double-right"></i>Subscribe</a></li>
                                <!-- <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>BTC</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>ETH</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="https://www.facebook.com/jordy.yeoman"><i
                                            class="fa fa-facebook bounce-btn"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/JordyYeoman"><i
                                            class="fa fa-twitter bounce-btn"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/jordy_yeoman/"><i
                                            class="fa fa-instagram bounce-btn"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:jywebdev@gmail.com"><i
                                            class="fa fa-envelope bounce-btn"></i></a></li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p class="h6">© All right Reversed.<a class="text-green ml-2"
                                    href="https://www.limitlessdevs.com.au" target="_blank">A LimitlessDevs
                                    production.</a></p>
                        </div>
                        <hr>
                    </div>
                </div>
            </section>
            <!-- ./Footer -->


        </div><!-- .site-info -->

    </footer><!-- #colophon -->

    <!-- </div>col end -->

    <!-- </div>row end -->



</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/standard.js" type="text/javascript">
</script>
</body>

</html>