<?php 

// Template Name: Form Landing

  get_header();

 
  $landingbanner = get_field('banner_section'); 
  $landingform = get_field('form_details'); 

?>

<style>
  .s-banner-landing {
      margin-top: 158px;
      height: 484px;
      background: url(<?php echo $landingbanner['background_image']['url'] ?>) no-repeat;
      background-size: cover;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
  }
  @media (max-width: 650px){
      .s-banner-landing {
          margin-top: 60px;
          background-position-x: 37%;
          padding-top: 58px;
          height: auto;
          position: relative;
      }
  }
</style>


<!-- Form Landing Banner -->


    <section class="s-banner-landing">
      <div class="container" data-aos="fade-right">
        <div class="text">
          <h1><?php echo $landingbanner['banner_title']; ?></h1>
          <p><?php echo $landingbanner['banner_description']; ?></p>
          <?php if($landingbanner['call_to_action_button']){ ?>
            <a href="<?php echo $landingbanner['call_to_action_button']['url']; ?>" target="<?php echo $landingbanner['call_to_action_button']['target']; ?>"><span><?php echo $landingbanner['call_to_action_button']['title']; ?></span></a>
          <?php } ?>
        </div>

        <div class="form" data-aos="fade-left">
          <div class="top">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shield-form.svg" alt="shield" class="shield" />
            <strong><?php echo $landingform['form_title']; ?></strong>
            <p><?php echo $landingform['text_below_title']; ?></p>
          </div>
          
          <?php 
            if(!empty($landingform['main_form_shortcode'])){
              echo do_shortcode( $landingform['main_form_shortcode'] );
            }
          ?>
          <span class="msg"><?php echo $landingform['form_bellow_text']; ?></span>
        </div>
      </div>
    </section>
    <!-- Form Landing Banner End -->

    <?php $multiimage = get_field('multiple_image_section'); ?>

    <section class="s-belangrijk page-landing">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h2><?php echo $multiimage['title']; ?></h2>
        <p><?php echo $multiimage['description']; ?></p>

        <ul>
        <?php 
        
        if($multiimage['list_items']){ 
            foreach($multiimage['list_items'] as $item){    
        ?>
          <li>
            <img src="<?php echo $item['icon']; ?>" alt="icon respect" />
            <span><?php echo $item['text']; ?></span>
          </li>
        <?php }} ?>
        </ul>
      </div>

      <div class="images" data-aos="zoom-in">
        <div class="box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_shield02.svg" alt="icon shield" />
          <span><?php echo $multiimage['pop_up_text']; ?></span>
        </div>

        <img src="<?php echo $multiimage['image_2']['url']; ?>" alt="<?php echo $multiimage['image_2']['alt']; ?>" class="image" />
        <img src="<?php echo $multiimage['image_1']['url']; ?>" alt="<?php echo $multiimage['image_1']['alt']; ?>" class="img" />
      </div>
    </div>
  </section>

  
  <section class="s-klanten">
      <div class="container">
        <div class="top">
          <?php $recenis = get_field('Recensie_section', 'option'); ?>      
          <h2 data-aos="fade-right"><?php echo $recenis['section_title'];?></h2>
          <div class="right" data-aos="fade-left">
            <p><?php echo $recenis['section_description'];?></p>
            <div class="actions">
              <div class="btn-slide btn-prev"></div>
              <div class="btn-slide btn-next"></div>
            </div>
          </div>
        </div>

        <div class="slide-klanten" data-aos="fade-up">
          <div class="swiper-wrapper">

            <?php 
              
              $labels = [
                'post_type'      => 'recensie',
                'posts_per_page' => -1,
              ];
              $loop = new WP_Query($labels);
              if($loop->have_posts()){
                while ($loop->have_posts()) {
                  $loop->the_post();
          
            ?>
            <div class="swiper-slide">
              <div class="image">
                <?php $clientimage = get_field('afbeelding_van_de_klant'); ?>
                <img src="<?php echo $clientimage['url']; ?>" alt="<?php echo $clientimage['alt']; ?>" />
              </div>
              <p><?php the_content(); ?></p>

              <div class="info">
                <div class="box">
                  <div class="logo">
                  <?php $companylogo = get_field('bedrijfslogo'); ?>
                    <img src="<?php echo $companylogo['url']; ?>" alt="<?php echo $companylogo['alt']; ?>" />
                  </div>

                  <ul>
                    <li><?php the_title(); ?></li>
                    <li><span><?php the_field('aanwijzing'); ?></span></li>
                  </ul>
                </div>

                <div class="stars">
                  <?php 
                    
                      $stars = get_field('sterren');
                      if($stars === "1 Ster"){
                        echo '<i class="lni lni-star-filled"></i><i class="lni lni-star"></i><i class="lni lni-star"></i><i class="lni lni-star"></i><i class="lni lni-star"></i>';
                      }else if($stars === "2 sterren"){
                        echo '<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star"></i><i class="lni lni-star"></i><i class="lni lni-star"></i>';
                      }else if($stars === "3 sterren"){
                        echo '<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star"></i><i class="lni lni-star"></i>';
                      }else if($stars === "4 sterren"){
                        echo '<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star"></i>';
                      }else if($stars === "5 sterren"){
                        echo '<i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>';
                      }  

                    ?>
                </div>
              </div>
            </div>            
            <?php } wp_reset_query();}?>
          </div>
        </div>
      </div>
    </section>


    <section class="s-betrokkenheid">
      <div class="container">
        <div class="text">
          <?php $svgsection = get_field('svg_image_section'); ?>
          <h2><?php echo $svgsection['title']; ?></h2>
          <p><?php echo $svgsection['description']; ?></p>
        </div>

        <div class="image">
          <object
            type="image/svg+xml"
            data="<?php echo $svgsection['svg_image']; ?>"
            class="ilustra"
          ></object>
        </div>
      </div>

      <div class="box">
        <div class="container">
          <?php $calltoaction = get_field('call_to_action_section'); ?>
          <h3><?php echo $calltoaction['title']; ?></h3>

            <p><?php echo $calltoaction['description']; ?></p>
            
            <a href="<?php echo $calltoaction['action_button']['url']; ?>" target="<?php echo $calltoaction['action_button']['target']; ?>"><span><?php echo $calltoaction['action_button']['title']; ?></span></a>
          </div>
      </div>
    </section>


<?php get_footer(); ?>