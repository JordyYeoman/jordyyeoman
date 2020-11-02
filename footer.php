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
                <div class="container" style="margin-right:3%;">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Videos</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Videos</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Donate</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="https://www.fiverr.com/share/qb8D02"><i
                                            class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i
                                            class="fa fa-angle-double-right"></i>Imprint</a></li>
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