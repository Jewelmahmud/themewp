<?php
/**
 * Template Name: White Papers
 *
 * @package erkelens
 * @author Jewel Mahmud
 * @link Fhttp://huqson.nl
 */

get_header();

$formvisibility = get_field('showhide_form');

?>

<section class="<?php 

  if($formvisibility === "SHOW"){
    if(is_page('solliciteren') || is_page('stage')){
      echo 't-text';
    }else {
      echo 's-text';
    }
  }else {
    echo 's-service s-page';
  } 
      
  ?>">
      <div class="container">
        <div class="content">
        <?php if($formvisibility === 'SHOW'){ ?>
            <div class="btn-form">
                <a href="#scrollform" class="btn btn-form-mobile">
                <span>Direct contact </span>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icon_nav_arrow_down.svg" alt="arrow">
                </a>
            </div>
          
          <div class="text">
          <?php } ?>
          <?php

              echo do_shortcode( '[im_inforwijzers]' );
              if(have_posts()):
                  while ( have_posts() ) : the_post(); 
                      echo wpautop( get_the_content(), $br = false ); 
                  endwhile;
              endif;
          ?>
            
          <?php if($formvisibility === 'SHOW'){ echo '</div>'; }?>
          
          <?php if($formvisibility === 'SHOW'){ ?>
          <a class="bottom-cursor" href="#value"></a>

          <div class="form" data-aos="fade-left" id="scrollform">
            <div class="top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shield-form.svg" alt="shield" class="shield">
                <strong><?php the_field('form_title'); ?></strong>
                <p><?php the_field('form_description_single') ?></p>
            </div>
            <?php 
              $contactform =  get_field('default_form_shortcode');

              if($contactform){
                echo do_shortcode($contactform);
              }else {
                echo "<form></form>";
              }
            
            ?>
            <span class="msg"><?php the_field('form_bottom_text') ?></span>
          </div>
          <?php  } ?>
        </div>
      </div>
    </section>


<?php get_footer();