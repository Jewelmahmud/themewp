<?php 

    // Singl template for Diensten

    get_header();
    
    $formvisibility = get_field('showhide_form');

?>

<section class="<?php echo ($formvisibility === "SHOW")? 's-text' : 's-service s-page' ?>">
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
              if(have_posts()):
                  while ( have_posts() ) : the_post(); 
                      echo wpautop( get_the_content(), $br = false ); 
                  endwhile;
              endif;
          ?>
            
          <?php if($formvisibility === 'SHOW'){ echo '</div>'; }?>
          
          <?php if($formvisibility === 'SHOW'){ ?>
          <a class="bottom-cursor" href="#value"></a>

          <div action="" class="form" data-aos="fade-left" id="scrollform">
            <div class="top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shield-form.svg" alt="shield" class="shield">
                <strong><?php the_field('form_title'); ?></strong>
                <p><?php the_field('form_description'); ?></p>
            </div>

            <?php 
            
                $dienstenform = get_field('diensten_form_shortcode');
                
                if($dienstenform['diensten_form_shortcode']){
                    
                }
                echo do_shortcode($dienstenform['diensten_form_shortcode']);
            ?>

            <span class="msg"><?php the_field('form_below_text'); ?></span>
          </div>
          <?php  } ?>
        </div>
      </div>
    </section>





<?php get_footer(); ?>