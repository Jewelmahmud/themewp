<?php

//Template Name: About

get_header();

$sectionone = get_field('section_one');
$sectiontwo = get_field('section_two');
$sectionthree = get_field('section_three_fix');
$sectionfour = get_field('section_four');
$sectionfour = get_field('section_four');
$sectionfive = get_field('section_five');


?>
<section class="s-resultaat">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2><?php echo $sectionone['section_title']; ?></h2>
          <p><?php echo $sectionone['sec_description']; ?></p>
        </div>

        <div class="image" data-aos="fade-left">
          <object type="image/svg+xml" data="<?php echo $sectionone['sec_image_one'] ?>" class="ilustra"></object>
        </div>
      </div>
    </section>

    <section class="s-belangrijk">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2><?php echo $sectiontwo['sec_title']; ?></h2>
          <p><?php echo $sectiontwo['sec_description']; ?></p>

          
          <ul>
          <?php 
          
            if($sectiontwo['list_items']){
              foreach($sectiontwo['list_items'] as $item){
          ?>
            <li>
              <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" />
              <span><?php echo $item['text']; ?></span>
            </li>
            <?php }} ?>
          </ul>
        </div>

        <div class="images" data-aos="zoom-in">
          <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_shield02.svg" alt="icon shield" />
            <span><?php echo $sectiontwo['popup_text']; ?></span>
          </div>

          <img src="<?php echo $sectiontwo['image_2']['url']; ?>" alt="<?php echo $sectiontwo['image_2']['alt']; ?>" class="image" />
          <img src="<?php echo $sectiontwo['image_1']['url']; ?>" alt="<?php echo $sectiontwo['image_1']['alt']; ?>" class="img" />
        </div>
      </div>
    </section>

    <section class="s-maatschappelijke">
      <div class="container">
        <div class="image" data-aos="fade-right">
          <object type="image/svg+xml" data="<?php echo $sectionthree['sec_image_one']['url'];?>" class="ilustra"></object>
        </div>

        <div class="text" data-aos="fade-left">
          <h2><?php echo $sectionthree['section_title'];?></h2>
          <p><?php echo $sectionthree['sec_description'];?></p>
        </div>
      </div>
    </section>

    <section class="s-slide" data-aos="flip-up">
        <div class="slide-images">
          <div class="swiper-wrapper">
            <?php
              if($sectionfour['sec_image']){
                foreach($sectionfour['sec_image'] as $image){
            ?>
            <div class="swiper-slide">
              <a href="<?php echo $image['image']['url'];?>" data-lightbox="imageslide">
                <img src="<?php echo $image['image']['url'];?>" alt="<?php echo $image['image']['alt'];?>" />
              </a>
            </div>
            <?php }}?>

            
        </div>
      <div class="container">
        <div class="actions">
          <div class="btn-slide btn-prev"></div>
          <div class="swiper-pagination"></div>
          <div class="btn-slide btn-next"></div>
        </div>
      </div>
    </section>

    <section class="s-zorg page-about">
      <div class="container">
        <div class="left" data-aos="fade-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_shield.svg" alt="shield" />
          <h2><?php echo $sectionfive['section_title']; ?></h2>
          <p><?php echo $sectionfive['sec_description']; ?></p>

          <div class="actions">
            <div class="btn-slide btn-prev"></div>
            <div class="btn-slide btn-next"></div>
          </div>
        </div>

        <div class="slide-zorg" data-aos="fade-up">
          <div class="swiper-wrapper">
          <?php 

            $labels = [
            'post_type'      => 'vragen',
            'posts_per_page' => -1,
            'order' => 'ASC'
            ];
            $loop = new WP_Query($labels);
            if($loop->have_posts()){
            while ($loop->have_posts()) {
                $loop->the_post();

          ?>

            <div class="swiper-slide">
              <a href="<?php the_field('link'); ?>">
                <h3><?php the_title(); ?></h3>

                <span
                  >Lees meer <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"
                /></span>
              </a>
            </div>
            <?php }wp_reset_query();} ?>
          </div>
        </div>

        <div class="actions actions-mobile">
          <div class="btn-slide btn-prev"></div>
          <div class="btn-slide btn-next"></div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>