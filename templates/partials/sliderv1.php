
    <section class="s-banner">
      <div class="container">
        <div class="slide-banner">
          <div class="swiper-wrapper">

          <?php 
              $labels = [
                  'post_type'      => 'slider',
                  'posts_per_page' => -1,
              ];
              $loop = new WP_Query($labels);

              if($loop->have_posts()) {

              while($loop->have_posts()) {
                  $loop->the_post();

          ?>
            <?php 
            
                $slidersvg = get_field('background_image_v1');
                $slideractbutton = get_field('slider_action_button');
                $slidervideobtn = get_field('slider_video_details');
            
            ?>
            <div class="swiper-slide">
              <div class="left" data-aos="fade-right">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('slider_sub_title'); ?></p>
                <ul>
                  <?php if($slideractbutton) { ?>
                  <li><a href="<?php echo $slideractbutton['url'] ?>" class="btn-color" target="<?php echo $slideractbutton['target'] ?>"><span><?php echo $slideractbutton['title'] ?></span></a></li>
                  <?php 
                      }
                    if($slidervideobtn){

                      $url = $slidervideobtn['url'];;
                      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                      $youtube_id = $match[1];
                  ?>
                  <li>
                    <button class="play btn" data-video-id="<?php echo $youtube_id; ?>">
                      <div class="icon"></div>
                      <span><?php echo $slidervideobtn['title']; ?></span>
                    </button>
                  </li>
                  <?php } ?>
                </ul>
              </div>

              <div class="image" data-aos="fade-left">
                <object
                  type="image/svg+xml"
                  data="<?php echo $slidersvg; ?>"
                  class="ilustra"
                ></object>
              </div>
            </div>

            <?php }wp_reset_query();} ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section> <!-- s-banner Version 1 End-->