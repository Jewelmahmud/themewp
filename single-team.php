<?php 

// Single template for Team

    get_header();

?>

    <section class="s-team-detail">
      <div class="container">
        <div class="top">
          <a href="<?php bloginfo('home'); ?>/team" class="back"
            ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_left_light.svg" alt="arrow" /><span
              >Back</span
            ></a
          >

          <div class="content">
            <div class="image" data-aos="fade-right">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_detail_team.png" alt="imagem team" /> -->
              <?php the_post_thumbnail( 'full', array() ) ?>
              <a href="<?php the_field('linkedin_profile_url'); ?>" class="linkedin-mobile"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin_light.svg" alt="linkedin"
              /></a>
            </div>

            <div class="info" data-aos="fade-left">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('aanwijzing'); ?></p>

              <ul>
                <?php if(!empty(get_field('mobile'))){ ?>
                <li>
                  <a href="callto:<?php the_field('mobile'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_phone.svg" alt="phone" />
                    <span><?php the_field('mobile'); ?></span>
                  </a>
                </li>
                <?php } 
                if(!empty(get_field('email'))){ ?>
                <li>
                  <a href="mailto: <?php the_field('email'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_email.svg" alt="email" />
                    <span><?php the_field('email_text'); ?></span>
                  </a>
                </li>
                <?php } ?>
              </ul>
              <?php if(!empty(get_field('linkedin_profile_url'))){ ?>
              <a href="<?php the_field('linkedin_profile_url'); ?>" class="linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin_light.svg" alt="linkedin"
              /></a>
              <?php } ?>
            </div>
          </div>

          <div class="about">
            <?php
                if(have_posts()):
                    while ( have_posts() ) : the_post(); 
                        echo wpautop( get_the_content(), $br = false ); 
                    endwhile;
                endif;
            ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>