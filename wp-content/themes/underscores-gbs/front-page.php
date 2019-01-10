<?php get_header(); ?>


	<section class="hero hero--home util--bg-overlay" 
		style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
		<div class="container">
			<div class="hero--home__wrap">
				<h1>easy. fast. affordable</h1>

				<form id="parkForm" class="front-page-form" method="GET" action="https://reservations.parkplusairportparking.com/reservation/book">
					<div class="form-group">
				    <!--<input type="text" class="form-control" id="selectLocation" placeholder="Select a Location">-->
				    <select id="selectLocation" class="form-control" name="loc">
				        <option disabled="" selected="selected">Select a location...</option>
									
            			<option value="540-1123">Newark Airport Park Plus Parking</option>
            
                        <option value="540-1118">Newark Airport Park Plus Parking (Rt 1&amp;9)</option>
                        
                        <option value="835-1121">Newark Airport Renaissance Hotel</option>
                        
                        <option value="695-1125">John F. Kennedy (JFK) Airport Parking</option>
                        
                        <option value="870-1127">LaGuardia Airport Marriott Hotel</option>
                        
                        <option value="800-1129">Westchester Airport Overflow/Long Term Lot</option>
                        
                        <option value="1470-1116">Wyndham Garden Philadelphia Airport Hotel</option>
				    </select>
				  </div>
					
					<div class="start-end-time d-flex">
						<div class="form-group">
					    <input type="text" class="form-control dp" id="startDate" placeholder="Start Date" name="depart_date" autocomplete="off">
					  </div>

					  <div class="form-group">
					    

                        <select id="startTime" class="form-control" name="depart_time">
                            <option value="01:00">1:00 AM</option>
                            <option value="01:30">1:30 AM</option>
                            <option value="02:00">2:00 AM</option>
                            <option value="02:30">2:30 AM</option>
                            <option value="03:00">3:00 AM</option>
                            <option value="03:30">3:30 AM</option>
                            <option value="04:00">4:00 AM</option>
                            <option value="04:30">4:30 AM</option>
                            <option value="05:00">5:00 AM</option>
                            <option value="05:30">5:30 AM</option>
                            <option value="06:00">6:00 AM</option>
                            <option value="06:30">6:30 AM</option>
                            <option value="07:00">7:00 AM</option>
                            <option value="07:30">7:30 AM</option>
                            <option value="08:00">8:00 AM</option>
                            <option value="08:30">8:30 AM</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="21:30">9:30 PM</option>
                            <option value="22:00">10:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                            <option value="23:00">11:00 PM</option>
                            <option value="23:30">11:30 PM</option>
                            <option value="00:00">12:00 AM</option>
                            <option value="00:30">12:30 AM</option>
                        </select>


					  </div>
				  </div>
					
					<div class="start-end-time d-flex">
						<div class="form-group">
					    <input type="text" class="form-control dp" id="endDate" placeholder="End Date" name="return_date" autocomplete="off">
					  </div>

					  <div class="form-group">
					    <select id="endTime" class="form-control" name="return_time">
					        <option value="01:00">1:00 AM</option>
                            <option value="01:30">1:30 AM</option>
                            <option value="02:00">2:00 AM</option>
                            <option value="02:30">2:30 AM</option>
                            <option value="03:00">3:00 AM</option>
                            <option value="03:30">3:30 AM</option>
                            <option value="04:00">4:00 AM</option>
                            <option value="04:30">4:30 AM</option>
                            <option value="05:00">5:00 AM</option>
                            <option value="05:30">5:30 AM</option>
                            <option value="06:00">6:00 AM</option>
                            <option value="06:30">6:30 AM</option>
                            <option value="07:00">7:00 AM</option>
                            <option value="07:30">7:30 AM</option>
                            <option value="08:00">8:00 AM</option>
                            <option value="08:30">8:30 AM</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="21:30">9:30 PM</option>
                            <option value="22:00">10:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                            <option value="23:00">11:00 PM</option>
                            <option value="23:30">11:30 PM</option>
                            <option value="00:00">12:00 AM</option>
                            <option value="00:30">12:30 AM</option>
					    </select>
					  </div>
					</div>
					
				  <div class="form-group promo-code">
				    <input type="text" class="form-control" id="promoCode" placeholder="Promo Code" name="promo_code">
				  </div>
				  
				</form>
				
				<button id="parkFormSubmit" class="btn btn--brand">Reserve</button>

				<div class="d-flex parking-options justify-content-between">


					    	<?php
					    	  $args = array(
					    	    'post_type' => 'page',
					    	    'post_status' => 'publish',
					    	    'meta_query' => array(
					    	      array(
					    	        'key' => '_wp_page_template',
					    	        'value' => 'page-templates/templ-single-airport.php',
					    	      )
					    	    )
					    	  );
					    	$airports = new WP_Query($args);
					    	$airportsNumber = $airports->post_count;
					    	$airportsFirstHalf = ceil($airportsNumber / 2);
					    	$count  = 1; ?>
					    	<div class="d-flex parking-option">
					    		<div class="swiper-container slider-hero">
					    	    <div class="swiper-wrapper">

					    				<?php while ( $airports->have_posts() ) : $airports->the_post(); ?>
  		    		    			<a href="<?php the_permalink(); ?>" class="swiper-slide">
  			  		    				<div class="parking-option--name">
  			  		    					<p><?php the_field('airport_short_name'); ?></p>
  			  		    					<p>Parking</p>
  			  		    				</div>
  			  		    				<div class="parking-option--price">
  			  		    					<span class="starting-at">Starting at:</span>
  			  		    					<div class="price">
    						    					<span>$</span>
    													<?php the_field('starting_at_price'); ?>
  			  		    					</div>
  			  		    				</div>
  			  		    			</a> <!-- slide -->

		  		    		<?php if ($count == $airportsFirstHalf) { ?>
	    				      </div> <!-- wrap -->
	    						</div> <!-- slider -->
	    					</div><!-- option -->

	    					<div class="d-flex parking-option">
	    						<div class="swiper-container slider-hero">
	    					    <div class="swiper-wrapper">
		  		    		<?php } ?>

					    	      <?php //the_permalink(); ?>
					    	        <?php //the_field('airport_short_name'); ?>
					    	   	<?php $count++; ?>
					    	  <?php endwhile; ?>
					    	<?php wp_reset_postdata(); ?>
				    	      </div> <!-- wrap -->
				    			</div> <!-- slider -->
				    		</div><!-- option -->


					
			
				</div> <!-- options -->

			</div> <!-- wrap -->
		</div> <!-- cont -->

		<svg class="bcg--filler" viewBox="0 0 1600 88.6">
			<path fill="#FFFFFF" d="M0,0c0,0,330.4,60,799.9,60h0.2C1269.6,60,1600,0,1600,0v88.6H0V0z"/>
		</svg>
	</section>


	<section class="sec--3-card airports">
		<div class="container">

			<h2 class="util--left-underline">airports</h2>
			<div class="row">
					<?php $homeAirportsIds = array_values(get_field('top_3_airports')); ?>
					<?php  
						foreach($homeAirportsIds as $homeAirportId) {
						    $the_post = get_post($homeAirportId);
						    $title = $the_post->post_title;
						    $link = get_the_permalink($homeAirportId);
						    $image = get_the_post_thumbnail_url($homeAirportId, 'full');
						    $short = get_field('airport_short_name', $homeAirportId);
						?>
						<div class="col-md-4">
							<a href="<?php echo $link; ?>" class="card--v1 util--zoom_wrap">
							  <div class="util--zoom_img" style="background-image: url('<?php echo $image; ?>');"></div>
							  <h3><?php echo $short; ?></h2>
								<p><?php echo $title; ?></p>
							</a>
						</div> <!-- col -->
						<?php } ?>



			</div> <!-- row -->
			<a class="toggle--load-more underline-hover" href="<?php echo esc_url( home_url( '/' ) ); ?>airport-parking">Browse All Airports</a>
		</div> <!-- cont -->
	</section>


	<?php $services = get_field('services'); ?>
	<section class="sec--img-txt mb65">
		<div class="container">
			<h2 class="util--left-underline">services</h2>
			<div class="row">
				<div class="col-lg-5 col-md-6">
					<div class="services-cards">

					<?php foreach($services as $index=>$service) { ?>
						<div class="services-card <?php echo $index == 0 ? 'js-is-active' : ''; ?>" id="services-card-<?php echo $index; ?>">
							<div class="img-wrap">
								<?php echo $service['svg_icon']; ?>
							</div>
							<h5><?php echo $service['title']; ?></h5>
						</div>
					<?php } ?>

					</div><!-- cards -->
				</div> <!-- col -->

				<div class="col-lg-7 col-md-6 services-content-wrap">
					<div class="sec--img-txt__txt">

							<?php foreach($services as $index=>$service) { ?>
								<div class="services-content <?php echo $index == 0 ? 'js-is-active' : ''; ?>" id="services-content-<?php echo $index; ?>">
									<h4><?php echo $service['title']; ?></h4>
										<?php echo $service['text']; ?>
								</div><!-- content -->
							<?php } ?>

					</div>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- cont -->
	</section>


	<?php echo do_shortcode('[parkplus-birdeye count="3"]'); ?>


	<section class="sign-up">
		<div class="container">
			<div class="d-flex">
				<h2 class="c-yellow">signup for<br/>our frequent<br/>parker program</h2>
				<form>
					<div class="form-group">
				    <input type="name" class="form-control" id="exampleInputName" placeholder="Enter your full name" required>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter valid email" required>
				  </div>
				  <button type="submit" class="btn btn--sec">Submit</button>
				</form>
			</div>
		</div> <!-- cont -->
	</section>


	<section class="park-plus-parking">
		<div class="container">
			<h2><span>park</span> plus airport parking</h2>
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<?php
					wp_nav_menu([
					  'theme_location'  => 'menu-homepage',
					  'depth'           => 1
					]); ?>

					<div class="social-wrap">
						<ul>
							<li>
								<a href="https://www.facebook.com/ParkPlusAirportParking" target="_blank">
									<svg viewBox="0 0 96.124 96.123">
										<path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/ParkPlusParking" target="_blank">
									<svg viewBox="0 0 612 612">
										<path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411    c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513    c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101    c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104    c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194    c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485    c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z" fill="#FFFFFF"/>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div> <!-- col -->

				<div class="col-md-7">
					<div class="location">
						<div id="map-canvas"></div>
					</div>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- cont -->
	</section>


<?php get_footer(); ?>
