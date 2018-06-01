<?php
/**
 * Default Template Name: About
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

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<!-- Custom Code Starts Here -->

		<!-- Container -->
		<div class="container pt-5">
			<!-- About -->
			<div id="about" class="row">
				<div class="col-lg order-lg-1">
					<h3 class="mb-4 text-warning">About Us</h3>
					<img src="img/Sadboysclub_1.png" class="mb-4 img-fluid heigth: auto; rounded d-none d-sm-block"/> <!-- This is a placeholder image -->
					<p>We are primarily a radio show hosted in Denton, Texas, on KUZU 92.9 LPFM. Our show focuses on playing local music and new releases you won't hear in the Top 40.</p>
				</div>
				<div class="col-lg order-lg-2">
					<h3 class="mb-4 text-warning">Our Team</h3>
					<img src="img/Sadboysclub_2.png" class="mb-4 img-fluid heigth: auto; rounded-circle d-none d-sm-block"/> <!-- This is a placeholder image -->
					<p>Currently the blog is curated and operated by Nathan Williams, so we're only one man strong, but two new team members are joining us soon.</p>
				</div>
				<div class="col-lg order-lg-3">
					<h3 class="mb-4 text-warning">Future Prospects</h3>
					<img src="img/Sadboysclub_3.png" class="mb-4 img-fluid heigth: auto; rounded d-none d-sm-block"/> <!-- This is a placeholder image -->
					<p>As we branch out of just being a weekly radio show, we'll start incorprating:</p>
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 1</strong>: Stuff</a>
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 2</strong>: More Stuff</a>
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 3</strong>: Other Stuff</a>
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 4</strong>: Something Else</a>
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 5</strong>: This is something</a>
						<a href="#" class="list-group-item list-group-item-action"><strong>Item 6</strong>: So is this</a>
					</div>
					<ul>
						<li>Exclusive in-house recordings from local artists.</li>
						<li>Youtube and Twitch streaming channel</li>
						<li>Fresh line of pins, hats, apparel and general swag.</li>
					</ul>
				</div>
			</div><!-- /About -->

			<!-- Artists -->
			<h1 id="artists" class="display-4 text-center my-5 text-warning">Artists</h1>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="card mb-3">
						<img class="card-img-top" src="/wp-content/themes/awesome-theme/images/Sadboysclub_mason.png" alt="Desertman">
						<div class="card-body">
							<h5 class="card-title text-warning">Mason Strickland</h5>
							<p class="card-text text-info">Mason makes music and likes riding his whip around Soundcloud.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card mb-3">
						<img class="card-img-top" src="/wp-content/themes/awesome-theme/images/Sadboysclub_nathan.png" alt="Deth Jets">
						<div class="card-body">
							<h5 class="card-title text-warning">Nathan Williams</h5>
							<p class="card-text text-info">Nathan hosts Sad Boys Club and enjoys coding.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card mb-3">
						<img class="card-img-top" src="/wp-content/themes/awesome-theme/images/Sadboysclub_dustin.png" alt="Ex10doe">
						<div class="card-body">
							<h5 class="card-title text-warning">Dustin Harris</h5>
							<p class="card-text text-info">Dustin enjoys backwoods and whiping around on his chuckus.</p>
						</div>
					</div>
				</div>

				<!-- additional row
				<div class="col-md-6">
				</div>

				<div class="col-md-6">
				</div>

				<div class="col-md-6">
				</div> /additional row -->

			</div><!-- /Artists -->
		</div><!-- /Container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
