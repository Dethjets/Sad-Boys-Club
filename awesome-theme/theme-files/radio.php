<?php
/**
 * Default Template Name: Radio
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awesome-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



<!-- Custom Code Starts Here -->

<!-- Container -->
<div class="container pt-5">


	<!-- Media -->
	<h1 id="radio" class="display-4 text-center my-5 text-warning">KUZU</h1>
	<p> We're a proud member of KUZU 92.9 FM, listen to the stations live stream below, and catch us on air Saturday's 3-5pm CST.</p>
	<div class="row">
		<div class="col-md-6 col-lg-4">
					<h5 class="card-title text-warning">Radio</h5>
					<p class="card-text text-info">This is our station.</p>
					<iframe width="100%" height="350px" scrolling="no" frameborder="no" allow="autoplay" src="https://www.kuzu.fm/streaming"></iframe>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
					<h5 class="card-title text-warning">Soundcloud</h5>
					<p class="card-text text-info">Peep what we're listening to.</p>
					<iframe width="100%" height="450px" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/98737749&color=%23ff9fd7&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=true&show_teaser=true"></iframe>
				</div>
			</div>
		</div>


		<div class="col-md-12 col-lg-12">
					<h5 class="card-title text-warning">Twitter</h5>
					<p class="card-text text-info">We're Twits.</p>
					<?php echo do_shortcode('[fts_twitter twitter_name=Sadboyclubus tweets_count=6 cover_photo=yes stats_bar=no show_retweets=no show_replies=no]'); ?> " alt="Twitter Stream">
				</div>
			</div>
		</div>

	</div><!-- /Media -->

</div><!-- /container -->

<!-- /Custom Code Ends Here -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
