<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet"/>
<?php 

    // Template Name: Contact

    get_header();

    $contactinfo = get_field('information');
?>


<section class="s-contact">
    <div class="container">
      <div class="info-contact" data-aos="fade-right">
      <?php while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>

        <div>
          <ul>
            <li>
              <a href="">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_pin.svg" alt="pin" />
                </div>
                <span>Schorsweg 13e 8171 ME Vaassen</span>
              </a>
            </li>
            <li>
              <?php $mobilenumber = get_field('contact_info', 'option'); ?>
              <a href="callto:<?php echo $mobilenumber['mobile']; ?>">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_phone.svg" alt="phone" />
                </div>
                <span><?php echo $mobilenumber['mobile']; ?></span>
              </a>
            </li>
            <li>
              <a href="mailto:<?php echo $mobilenumber['email']; ?>">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_email.svg" alt="email" />
                </div>
                <span><?php echo $mobilenumber['email']; ?></span>
              </a>
            </li>
          </ul>

          <span>
          
          <?php if ($contactinfo['kvk']){
            echo '<span>KvK.: '.$contactinfo['kvk'].'<br/>';
          }else {
            echo '<span>';
          }
          if ($contactinfo['beconnr']){
            echo 'Beconnr. '.$contactinfo['beconnr'].'</span>';
          }else{
            echo '</span>';
          } ?>
        </div>
      </div>

      <div action="" class="form" data-aos="fade-left">
        <div class="top">
          <p><?php echo $contactinfo['form_title']; ?></p>
        </div>
        <?php 

          if($contactinfo['contact_form_shortcode']){
            echo do_shortcode($contactinfo['contact_form_shortcode']); 
          }
        
        
        ?>
      </div>
    </div>

    <div class="map" id="map"></div>
  </section>


<?php get_footer(); ?>