<?php
/**
 * Default Template Name: Front Page
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
		<!-- Custom code starts here? -->

	<!-- Do I need this??	<body id-"home" class="bg-info text-white" data-spy="scroll" data-target=".navbar" data-offset="120"> -->


	    <!-- Jumbotron -->
	    <div class="jumbotron jumbotron-fluid bg-info text-warning border-bottom border-warning">
	      <div class="container text-sm-center pt-5">
	        <h1 class="display-2">Sad Boys Club</h1>
	        <p class="lead text-white">Sad Boys Club is a blog about music, lifestyle and cultue.</p>

	        <div class="btn-group mt-4" role="group" aria-label="Callout buttons">
	          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#join">Submit</button>
	          <a class="btn btn-light btn-lg" href="#artists">Artists</a>
	        </div>
	      </div>
	    </div><!-- /Jumbotron -->


	    <!-- Container -->
	    <div class="container pt-5">

	      <!-- Schedule -->
	      <h1 id="schedule" class="display-4 text-center my-5 text-warning">Schedule</h1>
	      [Show times]<!-- /Schedule -->

	      <!-- callout button -->
	      <button type="button" class="btn btn-outline-warning btn-lg d-block mx-auto my-5" data-toggle="modal" data-target="#join">Join The Club</button><!-- /callout button -->

	      <!-- Signup Form -->
	      <hr>
	      <div class="row py-4 text-warning">
	        <div class="col-md col-xl-5">
	          <p><strong>Sad Boys Club</strong></p>
	          <p class="text-white">We love music.</p>
	        </div>
	        <div class="col-md col-xl-5 ml-auto">
	          <p><strong>Stay up-to-date on new content</strong></p>
	          <div class="input-group">
	            <input type="text" class="form-control" placeholder="Email">
	            <span class="input-group-btn">
	              <button class="btn btn-primary" type="button">Sign up</button>
	            </span>
	          </div>
	        </div>
	      </div>
	      <hr><!-- /Signup Form -->

	      <!-- Footer -->
	      <div class="row py-3">
	        <div class="col-md-7">
	          <ul class="nav">
	            <li class="nav-item">
	              <a class="nav-link text-white" href="#">Community</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link text-white" href="#">Partners</a>
	            </li>
	            <li class="nav-item">
	              <div class="btn-group dropup">
	                <button type="button" class="btn btn-outline-warning">Other Sites</button>
	                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <span class="sr-only">Toggle Dropdown</span>
	                </button>
	                <div class="dropdown-menu">
	                  <a class="dropdown-item" href="#">Sunday Print Shop</a>
	                  <a class="dropdown-item" href="#">Kuzu.fm</a>
	                  <a class="dropdown-item" href="#">Something else here</a>
	                  <div class="dropdown-divider"></div>
	                  <a class="dropdown-item" href="#">Separated link</a>
	                </div>
	              </div>
	            </li>
	          </ul>
	        </div>
	        <div class="col-md text-md-right">
	          <small>&copy; 2018 Sad Boys Club &amp; KUZU</small>
	        </div>
	      </div><!-- /Footer -->

	    </div><!-- /Container -->

	    <!-- Input Button -->
	    <div class="input-group mb-4 mt-5 mx-auto">
	      <input type="text" class="form-control" placeholder="Want to know more? Enter your email here." aria-label="Wanna collab? Enter your email." aria-describedby="basic-addon2">
	      <div class="input-group-append">
	        <button class="btn btn-warning" type="button">Lit!</button>
	      </div>
	    </div><!-- /Input Button -->

	    <!--=========== Modal ==========-->
	    <div class="modal fade" id="join" tabindex="-1" role="dialog" aria-labelledby="Join the club" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header bg-info text-white">
	            <h5 class="modal-title text-warning" id="exampleModalLabel">Wanna join the club?</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body text-info">
	            <!-- Modal Form -->
	            <form>
	              <div class="alert alert-warning alert-dismissible fade show" role="alert">
	                <strong>Howdy!</strong> Coming Soon. Thanks for reaching out!
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                </button>
	              </div>
	              <h5 class="mb-4">Basic Info:</h5>
	              <div class="form-group">
	                <label for="name">Name:</label>
	                <input type="text" class="form-control" id="name">
	              </div>
	              <div class="form-group">
	                <label for="email">Email:</label>
	                <input type="email" class="form-control" id="email">
	              </div>
	              <div class="form-group">
	                <label for="location">Location:</label>
	                <input type="location" class="form-control" id="location">
	              </div>
	              <div class="form-group">
	                <label for="music">Music Link:</label>
	                <input type="music" class="form-control" id="music">
	              </div>
	              <div class="form-group">
	                <label for"genre">Music Genre:</label>
	                <select class="custom-select form-control" id="genre">
	                  <option value="hiphop">Hip-hop</option>
	                  <option value="lofi">Lo-fi</option>
	                  <option value="rock">Rock</option>
	                  <option value="pop">Pop</option>
	                  <option value="folk">Folk</option>
	                </select>
	              </div>

	              <!-- Custom Checkboxes -->
	              <hr class="mr-4">
	              <h5 class="mb-4">What can we help you with?</h5>

	              <div class="custom-control custom-checkbox">
	                <input type="checkbox" class="custom-control-input" id="checkbox-design">
	                <label class="custom-control-label" for="checkbox-design">Design</label>
	              </div>
	              <div class="custom-control custom-checkbox">
	                <input type="checkbox" class="custom-control-input" id="checkbox-website">
	                <label class="custom-control-label" for="checkbox-website">Website Development</label>
	              </div>
	              <div class="custom-control custom-checkbox">
	                <input type="checkbox" class="custom-control-input" id="checkbox-promotion">
	                <label class="custom-control-label" for="checkbox-promotion">Promotion</label>
	              </div>
	              <div class="custom-control custom-checkbox">
	                <input type="checkbox" class="custom-control-input" id="checkbox-gaming">
	                <label class="custom-control-label" for="checkbox-gaming">Gaming Sponsorship</label>
	              </div>
	              <div class="custom-control custom-checkbox">
	                <input type="checkbox" class="custom-control-input" id="checkbox-screenprint">
	                <label class="custom-control-label" for="checkbox-screenprint">Screenprinting</label>
	              </div><!-- /Custom Checkboxes -->

	              <!-- Payment Information -->
	              <hr class="mr-4">
	              <h5 class="mb-4">Want to give us money for some reason?</h5>

	              <div class="form-row">
	                <div class="col-lg-6 form-group">
	                  <label for="cc-num">Card Number:</label>
	                  <input class="form-control" id="cc-num" type="text">
	                </div>
	                <div class="col-lg form-group">
	                  <label for="zip">Zip Code:</label>
	                  <input class="form-control" id="zip" type="text">
	                </div>
	                <div class="col-lg form-group">
	                  <label for="cvv">CVV:</label>
	                  <input class="form-control" id="cvv" type="text">
	                </div>
	              </div>

	              <div class="form-row">
	                <label class="col-lg-12">Expiration Date:</label>

	                <div class="form-group col-lg-8">
	                  <select class="custom-select form-control" id="exp-month">
	                    <option value="1">1 - January</option>
	                    <option value="2">2 - February</option>
	                    <option value="3">3 - March</option>
	                    <option value="4">4 - April</option>
	                    <option value="5">5 - May</option>
	                    <option value="6">6 - June</option>
	                    <option value="7">7 - July</option>
	                    <option value="8">8 - August</option>
	                    <option value="9">9 - September</option>
	                    <option value="10">10 - October</option>
	                    <option value="11">11 - November</option>
	                    <option value="12">12 - December</option>
	                  </select>
	                </div>

	                <div class="form-group col-lg">
	                  <select class="custom-select form-control" id="exp-year">
	                    <option value="2016">2016</option>
	                    <option value="2017">2017</option>
	                    <option value="2018">2018</option>
	                    <option value="2019">2019</option>
	                    <option value="2020">2020</option>
	                  </select>
	                </div>
	              </div>

	              <h4 class="mb-4"></h4>
	              <button type="submit" class="btn btn-primary btn-lg">Submit</button>

	            </form><!-- /Modal Form -->
	          </div>
	        </div>
	      </div>
	    </div> <!--=========== /Modal ==========-->

	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- /Custom Code Ends Here -->

<!-- /Do I need this?	</body>  -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
