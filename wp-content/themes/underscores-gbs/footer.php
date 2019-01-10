	</main><!-- #content -->

	<footer class="footer">

		<div class="container">

			<?php if(!is_front_page()) { ?>
				<div class="footer__top">
					<div class="row">
						<div class="col-lg-5">
							<div class="newsletter-footer">
								<h2 class="c-yellow">signup for our <br />frequent parker program</h2>
								<form>
									<div class="form-group">
								    <input type="name" class="form-control" id="n-name" placeholder="Enter your full name" required>
								  </div>
								  <div class="form-group">
								    <input type="email" class="form-control" id="n-email" aria-describedby="emailHelp" placeholder="Enter valid email" required>
								  </div>
								  <button type="submit" class="btn btn--sec">Submit</button>
								</form>
							</div> <!-- flex -->
						</div> <!-- col -->

						<div class="col-lg-2 col-md-4">
							<?php
							wp_nav_menu([
							  'theme_location'  => 'menu-footer-left',
							  'depth'           => 1
							]); ?>
						</div> <!-- col -->
						
						<div class="col-lg-2 col-md-4">
							<?php
							wp_nav_menu([
							  'theme_location'  => 'menu-footer-middle',
							  'depth'           => 1
							]); ?>
						</div> <!-- col -->

						<div class="col-lg-2 col-md-4">
							<?php
							wp_nav_menu([
							  'theme_location'  => 'menu-footer-right',
							  'depth'           => 1
							]); ?>
						</div> <!-- col -->
					</div> <!-- row -->
				</div> <!-- footer__top -->
			<?php } ?>
			
			
			<div class="footer__btm">
				<a href="#" class="footer-logo">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
				</a>

				<div class="footer-menu">
    				<?php
    				wp_nav_menu([
    				  'theme_location'  => 'menu-footer-legal',
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
				</div>
			</div> <!-- footer__btm -->
		</div> <!-- cont -->
		
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
