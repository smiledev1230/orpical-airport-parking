

<?php 
	// Template Name: Single Parking Template
	?>
<?php get_header(); ?>
<?php $hero = get_field('hero');	 ?>
<section 
	class="hero--inner util--bg-overlay"  
	style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center"><?php the_title(); ?></h1>
				<hr/>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="starting-from">
					<span>starting from</span>
					<p><span>$</span><?php echo $hero['price'] ?></p>
				</div>
				<form class="inner-page-form" method="GET" action="https://reservations.parkplusairportparking.com/reservation/book/">
					<div class="form-group">
						<?php $airport = get_field('default_airport'); ?>
						<select id="selectLocation" class="form-control" name="loc">
							<option disabled="" <?php if (!$airport): echo 'selected="selected"'; endif; ?>>Select a location...</option>
							<option value="540-314" <?php if ($airport == "EWR"): echo 'selected="selected"'; endif; ?>>Newark Airport Park Plus Parking</option>
							<option value="540-511" <?php if ($airport == "EWR2"): echo 'selected="selected"'; endif; ?>>Newark Airport Park Plus Parking  (Rt 1&amp;9)</option>
							<option value="835-316" <?php if ($airport == "EWR3"): echo 'selected="selected"'; endif; ?>>Newark Airport Renaissance Hotel</option>
							<option value="695-312" <?php if ($airport == "JFK"): echo 'selected="selected"'; endif; ?>>John F. Kennedy (JFK) Airport Parking</option>
							<option value="870-310" <?php if ($airport == "LGA"): echo 'selected="selected"'; endif; ?>>LaGuardia Airport Marriott Hotel</option>
							<option value="800-306" <?php if ($airport == "HPN"): echo 'selected="selected"'; endif; ?>>Westchester Airport Overflow/Long Term Lot</option>
							<option value="1470-606" <?php if ($airport == "PHL"): echo 'selected="selected"'; endif; ?>>Wyndham Garden Philadelphia Airport Hotel</option>
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
					<button id="parkFormSubmit" class="btn btn--brand">Reserve</button>
				</form>
			</div>
			<!-- col -->
			<div class="col-lg-5 col-md-6">
				<ul>
					<?php foreach($hero['facts'] as $fact) { ?>
					<li><?php echo $fact['single_fact']; ?></li>
					<?php } ?>
				</ul>
			</div>
			<!-- col -->
			<div class="col-lg-3 col-md-12 contact-info">
				<div class="d-flex">
					<svg viewBox="0 0 480.56 480.56">
						<path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8
							c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4
							c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8
							c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3
							c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9
							c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z"/>
						<path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1
							c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z"/>
						<path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5
							l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z"/>
					</svg>
					<p>Need Additional Information? <br>Call Us 24/7 at</p>
				</div>
				<a href="tel:<?php echo $hero['information_number'] ?>"><?php echo $hero['information_number'] ?></a>
			</div>
			<!-- col -->
		</div>
		<!-- row -->
	</div>
	<!-- cont -->
	<div class="slide-to-section">
		<ul>
			<li><a class="pageSection" href="#section--overview">overview</a></li>
			<li><a class="pageSection" href="#section--services">services</a></li>
			<li><a class="pageSection" href="#section--directions">directions</a></li>
			<li><a class="pageSection" href="#section--review-all">reviews</a></li>
		</ul>
	</div>
</section>
<?php $overview = get_field('overview');  ?>
<section class="sec--img-txt reverse" id="section--overview">
	<div class="container">
		<h2 class="util--left-underline">overview</h2>
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="sec--img-txt__img">
					<div class="swiper-container slider-var1">
						<div class="swiper-wrapper">
							<?php foreach($overview['slider'] as $slider) { ?>
							<div class="swiper-slide">
								<div 
									class="swiper-slide--bcg" 
									style="background-image: url('<?php echo $slider['slide_image']; ?>');"></div>
							</div>
							<!-- slide -->
							<?php } ?>
						</div>
						<!-- wrapper -->
						<div class="swiper-pagination"></div>
					</div>
					<!-- slider -->
				</div>
			</div>
			<!-- col -->
			<div class="col-lg-7 col-md-6">
				<div class="sec--img-txt__txt">
					<h4><?php echo $overview['text']['title']; ?></h4>
					<?php echo $overview['text']['content']; ?>
				</div>
			</div>
			<!-- col -->
		</div>
		<!-- row -->
	</div>
	<!-- cont -->
</section>
<?php $services = get_field('services'); ?>
<section class="sec--img-txt" id="section--services">
	<div class="container">
		<h2 class="util--left-underline">services</h2>
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="services-cards">
					<?php foreach($services as $index=>$service) { ?>
					<div class="services-card <?php echo $index == 0 ? 'js-is-active' : ''; ?>" id="services-card-<?php echo $index; ?>">
						<div class="img-wrap">
							<?php echo $service['icon']; ?>
						</div>
						<h5><?php echo $service['title']; ?></h5>
					</div>
					<?php } ?>
				</div>
				<!-- cards -->
			</div>
			<!-- col -->
			<div class="col-lg-7 col-md-6 services-content-wrap">
				<div class="sec--img-txt__txt">
					<?php foreach($services as $index=>$service) { ?>
					<div class="services-content <?php echo $index == 0 ? 'js-is-active' : ''; ?>" id="services-content-<?php echo $index; ?>">
						<h4><?php echo $service['title']; ?></h4>
						<?php echo $service['text']; ?>
					</div>
					<!-- content -->
					<?php } ?>
				</div>
			</div>
			<!-- col -->
		</div>
		<!-- row -->
	</div>
	<!-- cont -->
</section>
<?php $directions = get_field('directions');  ?>
<input id="lat" type="hidden" name="" value="<?php echo $directions['map']['latitude']; ?>" />
<input id="lng" type="hidden" name="" value="<?php echo $directions['map']['longitude']; ?>" />
<section class="sec--tabs-var1 directions"  id="section--directions">
	<div class="container">
		<h2 class="util--left-underline">Directions</h2>
	</div>
	<!-- cont -->
	<div class="tabs--var1">
		<div class="container">
			<nav class="tabs--var1__tab-toggles d-flex">
				<?php $parking_services_tabs = ['North', 'East', 'South', 'West']; ?>
				<div class="nav nav-tabs nav-tabs--underline" role="tablist">
					<?php foreach($parking_services_tabs as $index=>$p_tab) { ?>
					<a 
						class="nav-item nav-link <?php echo ($index + 1 == 1) ? 'active' : ''; ?>" 
						data-toggle="tab" 
						href="#tabs--var1__<?php echo $index + 1; ?>" 
						role="tab" 
						aria-controls="nav-home" 
						aria-selected="true">
					<?php echo $p_tab; ?>
					</a>
					<?php } ?>
				</div>
				<!-- tab-toggles -->
			</nav>
		</div>
		<!-- cont -->
		<div class="tab-content tabs--var1__tab-content">
			<?php $parking_services = ['north', 'east', 'south', 'west']; ?>
			<?php foreach($parking_services as $index=>$p_service) { ?>
			<div 
				class="tab-pane fade show <?php echo ($index + 1 == 1) ? 'active' : ''; ?>" 
				id="tabs--var1__<?php echo $index + 1; ?>" 
				role="tabpanel" 
				aria-labelledby="nav-home">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<?php echo $directions[$p_service]; ?>
						</div>
						<!-- col -->
					</div>
					<!-- row -->
				</div>
				<!-- cont -->
			</div>
			<!-- pane -->
			<?php } ?>
			<div class="map">
				<div id="map-canvas"></div>
			</div>
		</div>
		<!-- tab-content -->
	</div>
</section>
<?php echo do_shortcode('[parkplus-birdeye count="3"]'); ?>
<?php get_footer(); ?>

