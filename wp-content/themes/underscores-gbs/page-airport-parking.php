<?php
/*
Template Name: Airport Page
*/

get_header(); ?>

  <section class="hero--inner hero--airports util--bg-overlay_dark"  style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    
    <div class="container">

      <form class="front-page-form front-page-form--v2" method="GET" action="https://reservations.parkplusairportparking.com/reservation/book/">
        <div class="form-group">
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

        <button id="parkFormSubmit" class="btn btn--sec">Reserve</button>
      </form>
      
    </div> <!-- cont -->
  </section>

  
  <section class="airports-near">
    <div class="container">
      <h2 class="text-center util--mid-underline">Airports</h2>

      <div class="row">


        <?php $airportsIds = get_field('airports'); ?>
        <?php  
          foreach($airportsIds as $airportId) {
              $the_post = get_post($airportId['airport_id']);

              $title = $the_post->post_title;
              $link  = get_the_permalink($airportId['airport_id']);
              $image = get_the_post_thumbnail_url($airportId['airport_id'], 'full');
              $short = get_field('airport_short_name', $airportId['airport_id']);
          ?>
          <div class="col-lg-4 col-md-6">
            <a href="<?php echo $link; ?>" class="card--v1 util--zoom_wrap">
              <div class="util--zoom_img" style="background-image: url('<?php echo $image; ?>');"></div>
              <h3><?php echo $short; ?></h2>
              <p><?php echo $title; ?></p>
            </a>
          </div> <!-- col -->
          <?php } ?>

      </div><!-- row -->
    </div> <!-- cont -->
  </section>


  <?php echo do_shortcode('[parkplus-birdeye count="3"]'); ?>

<?php get_footer(); ?>