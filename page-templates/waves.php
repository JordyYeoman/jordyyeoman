<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();

<!-- Background Waves	 -->
					<div class="background-waves">
						<svg class="background-waves-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
							<linearGradient id="myGradient" gradientTransform="rotate(90)">
								<stop offset="5%" stop-color="gold" />
								<stop offset="95%" stop-color="red" />
							</linearGradient>
							<path fill="url('#myGradient')" fill-opacity="1"
								d="M0,288L48,288C96,288,192,288,288,266.7C384,245,480,203,576,160C672,117,768,75,864,58.7C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
							</path>
						</svg>
						<svg class="background-waves-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
							<linearGradient id="myGradient3" gradientTransform="rotate(90)">
								<stop offset="25%" stop-color="#ffd33d" />
								<stop offset="95%" stop-color="white" />
							</linearGradient>
							<path fill="url('#myGradient3')" fill-opacity="1"
								d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
							</path>
						</svg>
						<svg class="background-waves-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
							<linearGradient id="myGradient2" gradientTransform="rotate(90)">
								<stop offset="25%" stop-color="orange" />
								<stop offset="95%" stop-color="white" />
							</linearGradient>
							<path fill="url('#myGradient2')" fill-opacity="1"
								d="M0,64L60,58.7C120,53,240,43,360,80C480,117,600,203,720,213.3C840,224,960,160,1080,128C1200,96,1320,96,1380,96L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
							</path>
						</svg>
					</div>
					<!-- Background Waves End -->
