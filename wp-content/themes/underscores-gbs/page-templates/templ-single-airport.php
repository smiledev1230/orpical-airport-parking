<?php 
// Template Name: Single Airport Template
?>



<?php get_header(); ?>

  <section class="hero--inner hero--airports util--bg-overlay_dark"  style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    
    <div class="container">

      <form class="front-page-form front-page-form--v2" method="GET" action="https://reservations.parkplusairportparking.com/reservation/book/">
        <div class="form-group">
        <?php $airport = get_field('airport_short_name'); ?>
          <select id="selectLocation" class="form-control" name="loc">
		        <option disabled="" <?php if (!$airport): echo 'selected="selected"'; endif; ?>>Select a location...</option>									
    				<option value="540-1123" <?php if ($airport == "EWR"): echo 'selected="selected"'; endif; ?>>Newark Airport Park Plus Parking</option>									
    				<option value="540-1118" <?php if ($airport == "EWR2"): echo 'selected="selected"'; endif; ?>>Newark Airport Park Plus Parking  (Rt 1&amp;9)</option>									
    				<option value="835-1121" <?php if ($airport == "EWR3"): echo 'selected="selected"'; endif; ?>>Newark Airport Renaissance Hotel</option>									
    				<option value="695-1125" <?php if ($airport == "JFK"): echo 'selected="selected"'; endif; ?>>John F. Kennedy (JFK) Airport Parking</option>									
    				<option value="870-1127" <?php if ($airport == "LGA"): echo 'selected="selected"'; endif; ?>>LaGuardia Airport Marriott Hotel</option>									
    				<option value="800-1129" <?php if ($airport == "HPN"): echo 'selected="selected"'; endif; ?>>Westchester Airport Overflow/Long Term Lot</option>								
    				<option value="1470-1116" <?php if ($airport == "PHL"): echo 'selected="selected"'; endif; ?>>Wyndham Garden Philadelphia Airport Hotel</option>
          </select>
        </div>

        <div class="start-end-time d-flex">
          <div class="form-group">
            <input type="text" class="form-control dp" id="startDate" placeholder="Start Date" name="depart_date">
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
            <input type="text" class="form-control dp" id="endDate" placeholder="End Date" name="return_date">
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

        <button id="parkFormSubmit" class="btn btn--sec">Reserve</button>
      </form>
      
    </div> <!-- cont -->
  </section>
  

  <section class="airport-parkings">
    <div class="container container--sm" style="max-width: 900px;">   
    
      <div class="airport-name d-flex">
        <h1 class="util--left-underline"><?php the_title(); ?></h1>
      </div> <!-- name --> 
      
    

      <?php
      $args = array(
          'post_parent' => $post->ID,
          'post_type' => 'page',
          'orderby' => 'menu_order'
      );
      $child_query = new WP_Query( $args );
      ?>
      

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="parking-card">
          <div class="parking-img util--zoom_wrap">
            <div class="util--zoom_img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
          </div> <!-- img -->

          <div class="parking-info">
            <h3 class="parking-info--name c-yellow"><?php the_title(); ?></h3>

            <!-- <p class="parking-info--airport">newark liberty international airport EWR</p> -->
            <p class="parking-info--street"><?php the_field('address'); ?></p>

          </div> <!-- info -->

          <div class="parking-price d-flex">
            <div class="parking-price--price">
                <h5>Starting From</h5>
              <h2>$<?php echo get_field('hero')['price']; ?></h2>
            </div>
          </div> <!-- price -->

        </a> <!-- parking-info-card -->
      <?php endwhile; ?>
      <?php
      wp_reset_postdata();
      ?>



    </div> <!-- cont -->
  </section>


<?php get_footer(); ?>