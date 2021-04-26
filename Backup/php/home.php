<?php 



// Template Name: Home

get_header(); 

  $vragensection = get_field('vragen_option');
  $teamsection = get_field('team_section');
  $newssection = get_field('nieuws_section');



?>



    <section class="s-zorg">
      <div class="container">
        <div class="left" data-aos="fade-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_shield.svg" alt="shield" />
          <h2><?php echo $vragensection['section_title']; ?></h2>
          <p><?php echo $vragensection['section_description']; ?></p>
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

              ];

              $loop = new WP_Query($labels);
              if($loop->have_posts()){
                while ($loop->have_posts()) {
                  $loop->the_post();
            ?>
            <div class="swiper-slide">
              <a href="<?php the_field('link'); ?>">
                <h3><?php the_title(); ?></h3>
                <span>Lees meer <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"/></span>
              </a>
            </div>

            <?php

                } wp_reset_query();

            }

            ?>
          </div>
        </div>
        <div class="actions actions-mobile">
          <div class="btn-slide btn-prev"></div>
          <div class="btn-slide btn-next"></div>
        </div>
      </div>
    </section>



    <section class="s-team">
      <div class="container">
        <div class="left" data-aos="zoom-in">
          <div class="square"></div>
          <?php 

            $labels = [
            'post_type'      => 'team',
            'posts_per_page' => -1,
            'order' => 'DESC'
            ];
            $loop = new WP_Query($labels);
            $i = 0;
            if($loop->have_posts()){
              while ($loop->have_posts()) {
                $i++;
                  $loop->the_post();
                  if(strval($i) === '1'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                    <a href="<?php echo $teamsection['job_board_button']['url'] ?>" class="txt">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_koffer.svg" alt="koffer" />
                      <span><?php echo $teamsection['job_board_button']['title'] ?></span>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg" alt="arrow" />
                    </a>
                  <?php 
                  }
                  if(strval($i) === '2'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                  <?php 
                  }
                  if(strval($i) === '3'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                  <?php 
                  }
                  if(strval($i) === '4'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                    <div class="square"></div>
                  <?php 
                  }
                  if(strval($i) === '5'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                  <?php 
                  }
                  if(strval($i) === '6'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                    <div></div>
                  <?php 
                  }
                  if(strval($i) === '7'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                    <div class="txt-larger">
                      <span>Volg ons op </span>
                      <?php $socialMedia = get_field('social_media', 'option'); ?>
                      <ul>
                        <?php if(!empty($socialMedia['facebook_url'])){ ?>
                        <li>
                          <a href="<?php echo $socialMedia['facebook_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_facebook.svg" alt="facebook"/></a>
                        </li>

                        <?php } if(!empty($socialMedia['linkedin_url'])){ ?>
                        <li>
                          <a href="<?php echo $socialMedia['linkedin_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"/></a>
                        </li>

                        <?php } if(!empty($socialMedia['instagram_url'])){ ?>
                        <li>
                          <a href="<?php echo $socialMedia['instagram_url'];?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_instagram.svg" alt="instagram"/></a>
                        </li>

                        <?php } ?>

                      </ul>

                    </div>
                  <?php 
                  }
                  if(strval($i) === '8'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                  <?php 
                  }
                  if(strval($i) === '9'){
                    ?>
                    <div class="photo">
                      <img src="<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>" alt="image team" />
                    </div>
                  <?php 
                  }

              } wp_reset_query();
            }

        ?>

        </div>
        <div class="right" data-aos="fade-left">
          <h2><?php echo $teamsection['section_title']; ?></h2>
          <p><?php echo $teamsection['section_description']; ?></p>
          <a href="<?php echo $teamsection['lees_meer_button']['url']; ?>" target="<?php echo $teamsection['lees_meer_button']['target']; ?>">
            <span><?php echo $teamsection['lees_meer_button']['title']; ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
          </a>
        </div>
      </div>

    </section>
    
    <section class="s-nieuws">
      <div class="container">
        <div class="top">
          <h2 data-aos="fade-right"><?php echo $newssection['section_title']; ?></h2>
          <ul class="tabs" data-aos="fade-left">
            <li class="active">
              <a href="#nieuws"><div class="icon"></div><span>Nieuws</span></a>
            </li>
            <li>
              <a href="#whitepapers"><div class="icon"></div><span>Whitepapers</span></a>
            </li>
          </ul>
        </div>

        <div class="tab-content">
          <div class="content active" id="nieuws">
            <div class="slide-nieuws">
              <div class="swiper-wrapper">

              <?php 

                $labels = [

                  'post_type'      => 'post',
                  'posts_per_page' => 15,
                  'order'          => 'DESC',

                ];

                $loop = new WP_Query($labels);
                $counter = 0;
                if($loop->have_posts()){
                  while ($loop->have_posts()) {
                    $loop->the_post();
                    $counter++;
                    $categories = get_the_category(); ?>



                <div class="swiper-slide" data-aos="fade-right">
                  <a href="<?php the_permalink(); ?>" class="card-nieuws">
                    <div class="image">
                      <?php the_post_thumbnail( 'newsbig', array() ); ?>
                      <div class="tag"><span><?php 
                        if($categories && count($categories) > 1){
                          foreach($categories as $category){
                            echo $category->name.' ';
                          }
                        }else {
                          echo $categories[0]->cat_name; 
                        }
                      ?></span></div>

                    </div>
                    <div class="text">
                      <div class="date">
                        <span><?php echo get_the_date('d M Y'); ?></span>
                      </div>
                      <h3><?php huqsonExcerpt(get_the_title(), 45); ?></h3>
                      <p><?php huqsonExcerpt(get_the_excerpt(), 85); ?></p>
                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>
              <?php }} ?>
              </div>

              <div class="actions">
                <div class="btn-slide btn-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="btn-slide btn-next"></div>
              </div>

            </div>

          </div>



          <div class="content" id="whitepapers">
            <div class="slide-whitepapers">
              <div class="swiper-wrapper">
              <?php 
                $labels = [

                  'post_type'      => 'post',
                  'posts_per_page' => 15,
                  'order'          => 'DESC',
                ];

                $loop = new WP_Query($labels);
                $counter = 0;
                if($loop->have_posts()){
                  while ($loop->have_posts()) {
                    $loop->the_post();
                    $counter++;       
                    $categories = get_the_category(); ?>
                <div class="swiper-slide">
                  <a href="<?php the_permalink(); ?>" class="card-nieuws">
                    <div class="image">
                      <?php the_post_thumbnail( 'newsbig', array() ); ?>
                      <div class="tag"><span><?php 
                        if($categories && count($categories) > 1){
                          foreach($categories as $category){
                            echo $category->name.' ';
                          }
                        }else {
                          echo $categories[0]->cat_name; 
                        }
                      ?></span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span><?php echo get_the_date('d M Y'); ?></span>
                      </div>
                      <h3><?php huqsonExcerpt(get_the_title(), 45); ?></h3>
                      <p><?php huqsonExcerpt(get_the_excerpt(), 85); ?></p>
                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>
                <?php }} ?>
              </div>
              <div class="actions">
                <div class="btn-slide btn-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="btn-slide btn-next"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>