<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="VanErkelens" />
    <?php $siteIdentity = get_field('site_identities', 'option'); ?>
    <?php $contactInfo = get_field('contact_info', 'option'); ?>
    <?php $socialMedia = get_field('social_media', 'option'); ?>
    <?php $otheroption = get_field('other_options', 'option'); ?>
    <?php $whatsappswitch = $otheroption['whatsapp_button']; ?>
    <link rel="shortcut icon" href="<?php echo $siteIdentity['favicon'];  ?>">
    
    <?php wp_head(); ?>
    <style>
      <?php if('HIDE' === $whatsappswitch){ ?>
        .joinchat{
          display: none !important;
        }
      <?php }?>
    </style>
    
  </head>

  <body <?php echo body_class(); ?>>
    <header>
      <div class="sub-menu">
        <div class="container">
          <ul>
            <li>
              <a href="mailto:<?php echo $contactInfo['email'];  ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_email.svg" alt="email" />
                <span><?php echo $contactInfo['email'];  ?></span></a
              >
            </li>

            <li>
              <a href="callto:<?php echo $contactInfo['mobile'];  ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_phone.svg" alt="phone" /><span
                  ><?php echo $contactInfo['mobile'];  ?></span
                ></a
              >
            </li>
          </ul>

          <div class="right">
            <!-- <form action="" class="search">
              <input type="text" class="input-busca" name="search" placeholder="Zoeken naar..." id="search"/>
              <button type="submit">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_search.svg" alt="icon search" />
                </div>
              </button>
            </form> -->
            <?php get_search_form( ); ?>

            <ul>
              <?php if(!empty($socialMedia['facebook_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['facebook_url'];  ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_facebook.svg" alt="facebook"
                /></a>
              </li>
              <?php } if (!empty($socialMedia['linkedin_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['linkedin_url'];  ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"
                /></a>
              </li>
              <?php } if (!empty($socialMedia['linkedin_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['instagram_url'];  ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_instagram.svg" alt="instagram"
                /></a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="content-menu">
        <div class="container">
          <a href="<?php bloginfo('home'); ?>" class="logo">
            
            <img src="<?php 
              if($siteIdentity['header_logo']){
                echo $siteIdentity['header_logo']; 
              }else {
                echo get_template_directory_uri() . '/assets/img/logo_light.svg';
              }
            ?>" alt="Logo Erkelens" />
          </a>

          <nav>
            

            <?php 

                    

            $MainMenu = array(

                'theme_location'   => 'mainmenu',
                'menu'             => '',
                'container'        => 'ul',
                'container_class'  => 'menu',
                'container_id'     => 'container_ID',
                'menu_class'       => 'menu',
                'menu_id'          => '',
                'add_li_class'     => '',
                'echo'             => true,
                'before'           => '',
                'after'            => '',
                'link_after'       => '',
                'depth'            => 0,
                'fallback_cb'      => 'carwashFallbackMenu',
                'walker'           => new Erkelens_Walker(),

            );
            wp_nav_menu( $MainMenu );

        ?>

            <div class="btns-action">
              <?php $actionbutton = $otheroption['calltoaction'] ?>
              <a href="<?php echo $actionbutton['url'] ?>" class="link" target="<?php echo $actionbutton['target'] ?>" rel="noreferrer"
                ><span><?php echo $actionbutton['title'] ?></span></a>

              <div class="login">
                <button type="button" class="js-btn-login cta-drop">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_login.svg" alt="icon login" />
                  <span>Login</span>
                  <div class="arrow"></div>
                </button>

                <ul class="dropdown drop-login">
                <?php $loginlinks = $otheroption['login_icons_and_links'] ?>
                <?php if($loginlinks){ foreach($loginlinks as $link){?>
                  <li>
                    <a href="<?php echo $link['login_url']; ?>" target="_blank">
                      <img
                        src="<?php echo $link['icon']['url']; ?>"
                        alt="<?php echo $link['icon']['alt']; ?>"
                      />
                    </a>
                  </li>
                <?php }}?>
                </ul>
              </div>
            </div>
          </nav>

          <a id="js-open-menu" class="menu-button">
            <i class="menu-icon"><strong>menu</strong></i>
          </a>
        </div>
      </div>

      <div class="menu-mobile">

      <?php 

                    

            $MobileMenu = array(

                'theme_location'   => 'mobilemenu',
                'menu'             => '',
                'container'        => 'ul',
                'container_class'  => 'menu-content-mobile',
                'container_id'     => 'container_ID',
                'menu_class'       => 'menu-content-mobile',
                'menu_id'          => '',
                'add_li_class'     => 'item-menu',
                'echo'             => true,
                'before'           => '',
                'after'            => '',
                'link_after'       => '',
                'depth'            => 0,
                'fallback_cb'      => 'carwashFallbackMenu',
                'walker'           => new Erkelens_Walker_Mobile(),

            );
            wp_nav_menu( $MobileMenu );

        ?>
        
          
             
          <div class="mobileLogin">
            <button type="button">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_login.svg" alt="icon login" />
              <span>Login</span>
              <img class="seta" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg" alt="arrow">
            </button>

            <ul>
              <?php if($loginlinks){foreach($loginlinks as $link){?>
              <li>
                <a href="<?php echo $link['url']; ?>">
                <img
                      src="<?php echo $link['icon']['url']; ?>"
                      alt="<?php echo $link['icon']['alt']; ?>"
                    />
                </a>
              </li>
              <?php }} ?>
            </ul>
          
          </div>

      </div>
    </header>

<?php 
    
  if(is_page_template( 'templates/about.php' ) || is_page_template( 'templates/contact.php' ) || is_page_template( 'templates/diensten.php' ) || is_page_template( 'templates/faq.php' ) || is_page_template( 'templates/news.php' ) || is_page_template( 'templates/team.php' ) || is_page_template( 'default' ) || is_singular('diensten') || is_search()){ 
      if(!is_single() ){
        include get_template_directory() . '/templates/partials/banner.php';
      }
      if(is_singular('diensten')){
        include get_template_directory() . '/templates/partials/banner.php';
      }
  } 
  $sliderversion = get_field('home_page_slider','option');
  if(!is_404() && is_page_template( 'templates/home.php' ) && !is_single()){

    if($sliderversion === 'V1'){
      include get_template_directory() . '/templates/partials/sliderv1.php';
    }else{ 
      include_once get_template_directory() . '/templates/partials/sliderv2.php';
    } 
  } 
 
 ?>
