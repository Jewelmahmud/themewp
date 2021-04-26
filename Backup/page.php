<?php
/**
 * Page Template
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
              if(have_posts()):
                  while ( have_posts() ) : the_post(); 
                      echo wpautop( get_the_content(), $br = false ); 
                  endwhile;
              endif;
          ?>
            
          <?php if($formvisibility === 'SHOW'){ echo '</div>'; }?>
          
          <?php if($formvisibility === 'SHOW'){ ?>
          <a class="bottom-cursor" href="#value"></a>

          <form action="" class="form" data-aos="fade-left" id="scrollform">
            <div class="top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shield-form.svg" alt="shield" class="shield">
                <strong>Contactformulier</strong>
                <p>Wilt u weten wat wij voor u kunnen betekenen? 
                Bel ons of vul onderstaande formulier in.</p>
            </div>
            <div class="form-group">
              <label for="naam">Naam</label>
              <input
                type="text"
                name="naam"
                class="js-input"
                placeholder="Uw naam *"
              />
            </div>

            <div class="form-group">
              <label for="telefoonnummer">Telefoonnummer</label>
              <input
                type="text"
                name="telefoonnummer"
                mask="phone"
                class="js-input"
                placeholder="Telefoonnummer*"
              />
            </div>

            <div class="form-group">
              <label for="emailadres">E-mailadres*</label>
              <input
                type="text"
                name="emailadres"
                class="js-input"
                placeholder="E-mailadres*"
              />
            </div>

            <div class="form-group form-text">
              <p>* Verplichte velden</p>
            </div>

            <div class="form-group">
              <button type="submit" class="btn">
                <span>Verzend aanvraag</span>
              </button>
            </div>

            <span class="msg">Wij nemen binnen 24 uur contact met u op. </span>
          </form>
          <?php  } ?>
        </div>
      </div>
    </section>


<?php get_footer();