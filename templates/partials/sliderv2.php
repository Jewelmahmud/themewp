
<?php 
    $labels = [
        'post_type'      => 'slider',
        'posts_per_page' => -1,
    ];
    $loop = new WP_Query($labels);

    if($loop->have_posts()) {

    while($loop->have_posts()) {
        $loop->the_post();;

?>
<style>
.s-banner-v2 .swiper-slide {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    opacity: 0;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    background: url(<?php the_field('background_image_v2') ?>) no-repeat;
    background-size: cover;
}
@media (max-width: 420px){
  .s-banner-v2 .swiper-slide {
      background: url(<?php the_field('background_image_v2_mobile') ?>) no-repeat top center;
      background-size: cover;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      padding-top: 39px;
  }
}
</style>
<?php } wp_reset_query(); } ?>

<section class="s-banner-v2">
      <div class="slide-banner-v2">
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
            
                $sliderimage = get_field('background_image_v2');
                $slideractbutton = get_field('slider_action_button');
                $slidervideobtn = get_field('slider_video_details');
            
            ?>
          <div class="swiper-slide">
            <div class="container">
              <div class="text" data-aos="fade-right">
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

                    <?php } ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php }wp_reset_query();} ?>
        </div>

        <div class="container">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> <!-- s-banner Version 2 End-->