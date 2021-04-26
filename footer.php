
<?php 
  $siteIdentity = get_field('site_identities', 'option'); 
  $contactInfo = get_field('contact_info', 'option'); 
  $socialMedia = get_field('social_media', 'option'); 
  $otheroption = get_field('other_options', 'option');


  if(!is_404()){
?>
  <?php if(!is_page_template( 'templates/landing.php' )){ ?>
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
                      if($stars === "1 ster"){
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
    <?php } ?>

    

    <section class="s-mediation">
      <div class="container">
        <div class="image" data-aos="fade-right">
          <?php 
            
            $footersvgsec = get_field('svg_image_and_text_section', 'option'); 
            $mediation = get_field('mediation');
            
          ?>
          <object
            type="image/svg+xml"
            data="<?php echo ($mediation['m_svg_image']) ? $mediation['m_svg_image'] : $footersvgsec['svg_image']['url']; ?>"
            class="ilustra"
          ></object>
        </div>

        <div class="text" data-aos="fade-left">
          <h2><?php echo ($mediation['m_title'])? $mediation['m_title'] : $footersvgsec['title']; ?></h2>
          <p><?php echo ($mediation['m_description'])? $mediation['m_description'] : $footersvgsec['description']; ?></p>
          <a href="<?php echo ($mediation['m_action_button']) ? $mediation['m_action_button']['url'] : $footersvgsec['action_button']['url']; ?>" class="btn-color" target="<?php echo ($mediation['m_action_button']) ? $mediation['m_action_button']['target'] : $footersvgsec['action_button']['target']; ?>"><span><?php echo ($mediation['m_action_button']) ? $mediation['m_action_button']['title'] : $footersvgsec['action_button']['title']; ?></span></a>
        </div>
      </div>
    </section>

<?php } ?>


    <footer>
      <div class="top">
        <div class="container">
          <a href="" class="logo">
            <?php $siteIdentity = get_field('site_identities', 'option'); ?>
            <img src="<?php echo $siteIdentity['footer_logo']; ?>" alt="Logo Erkelens" />
          </a>
          <nav>
          <?php 

                              

          $MainMenu = array(

              'theme_location'   => 'footermenu',
              'menu'             => '',
              'container'        => 'ul',
              'container_class'  => 'menu',
              'container_id'     => 'container_ID',
              'menu_class'       => 'menu footermenu',
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
              <a href="<?php echo $otheroption['calltoaction']['url'] ?>" class="link" target="<?php echo $otheroption['calltoaction']['target'] ?>" rel="noreferrer"
                ><span><?php echo $otheroption['calltoaction']['title'] ?></span></a
              >

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
                <?php }} ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="container">
        <div class="menu-content-mobile">
          <div class="item-menu js-menu">
            <div class="top-menu">
              <h3>Contact</h3>
              <img
                class="seta"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg"
                alt="Icone seta para baixo"
              />
            </div>
            <ul>
              <li>
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_pin.svg" alt="pin" /><?php echo $contactInfo['address']; ?></a
                >
              </li>
              <li>
                <a href="callto:<?php echo $contactInfo['mobile']; ?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_phone.svg" alt="phone" /><?php echo $contactInfo['mobile']; ?></a
                >
              </li>
              <li>
                <a href="mailto:<?php echo $contactInfo['email']; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_email.svg" alt="e-mail" /><?php echo $contactInfo['email']; ?>
                </a>
              </li>
            </ul>
          </div>

          <div class="item-menu js-menu">
            <div class="top-menu">
              <?php 
                $footermenu1 = $otheroption['footer_menu_1'];
                $footermenu1items = $footermenu1['menu_item'];
              ?>
              <h3><?php echo $footermenu1['menu_title'];?></h3>
              <img
                class="seta"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg"
                alt="Icone seta para baixo"
              />
            </div>
            <ul>
            <?php 
              if($footermenu1items){
                foreach($footermenu1items as $item){?>
                  <li><a href="<?php echo $item['item_link']; ?>"><?php echo $item['item_text']; ?></a></li>
            <?php
                   }
                 }           
            ?>
            </ul>
          </div>

          <div class="item-menu js-menu">
            <div class="top-menu">
              <?php 
                $footermenu2 = $otheroption['footer_menu_2'];
                $footermenu2items = $footermenu2['menu_item'];
              ?>
              <h3><?php echo $footermenu2['menu_title'];?></h3>
              <img
                class="seta"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg"
                alt="Icone seta para baixo"
              />
            </div>
            <ul>
              <?php 
                if($footermenu2items){
                  foreach($footermenu2items as $item){?>
                    <li><a href="<?php echo $item['item_link']; ?>"><?php echo $item['item_text']; ?></a></li>
              <?php
                    }
                  }           
              ?>
            </ul>
          </div>
        </div>

        <div class="links">
          <ul class="contact">
            <li><p>Contact</p></li>
            <li>
              <a href="#"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_pin.svg" alt="pin" /><?php echo $contactInfo['address']; ?></a
              >
            </li>
            <li>
              <a href="callto:<?php echo $contactInfo['mobile']; ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_phone.svg" alt="phone" /><?php echo $contactInfo['mobile']; ?></a
              >
            </li>
            <li>
              <a href="mailto:<?php echo $contactInfo['email']; ?>"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_email.svg"
                  alt="e-mail"
                /><?php echo $contactInfo['email']; ?></a
              >
            </li>
          </ul>

          <ul>
            <li><p><?php echo $footermenu1['menu_title'];?></p></li>
            <?php 
                if($footermenu1items){
                  foreach($footermenu1items as $item){?>
                    <li><a href="<?php echo $item['item_link']; ?>"><?php echo $item['item_text']; ?></a></li>
              <?php
                    }
                  }           
              ?>
          </ul>

          <ul>
            <li><p><?php echo $footermenu2['menu_title'];?></p></li>
            <?php 
                if($footermenu2items){
                  foreach($footermenu2items as $item){?>
                    <li><a href="<?php echo $item['item_link']; ?>"><?php echo $item['item_text']; ?></a></li>
              <?php
                    }
                  }           
              ?>
          </ul>

          <div class="media">
            <p>Social media</p>
            <ul class="social-media">
            <?php $socialmediafooter = get_field('social_media','option'); 
              if (!empty($socialmediafooter['facebook_url'])){
            ?>
              <li>
                <a href="<?php echo $socialmediafooter['facebook_url']; ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_facebook.svg" alt="facebook"
                /></a>
              </li>
              <?php  } if (!empty($socialmediafooter['linkedin_url'])) { ?>
              <li>
                <a href="<?php echo $socialmediafooter['linkedin_url']; ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"
                /></a>
              </li>
              <?php  } if (!empty($socialmediafooter['instagram_url'])) { ?>
              <li>
                <a href="<?php echo $socialmediafooter['instagram_url']; ?>" target="_blank" rel="noreferrer"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_instagram.svg" alt="instagram"
                /></a>
              </li>
              <?php } ?>
            </ul>

            <ul class="img-links">
              <?php 
                $otherlogo = $otheroption['other_logos'];
                if($otherlogo){
                  foreach($otherlogo as $logo){?>
                    <li><a href="<?php echo $logo['url']; ?>" target="_blank"><img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>" /></a></li>
                <?php }}?>
              
            </ul>
          </div>
        </div>
      </div>

      <div class="ropade">
        <div class="container">
          <p>
            <?php echo $otheroption['copyright_text']?>
          </p>

          <a href="http://huqson.nl" class="dev" target="_blank">
            <p>Made with</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_heart.svg" alt="heart" />
            <p>by <span>Huqson</span></p>
          </a>
        </div>
      </div>
    </footer>

    <?php 

      $popup = get_field('popup','option'); 
      $cookiesopt = get_field('cookies','option'); 

      if($cookiesopt['visibility'] === 'ON'){
    
    ?>

    <div class="cookies">
      <div class="container">
        <div class="text">
          <h5><?php echo $cookiesopt['cookies_title'];?></h5>
          <p><?php echo $cookiesopt['cookies_text'];?></p>
        </div>

        <div class="btns">
          <button class="btn-color" id="cookieaccepted" onclick="cookiesaccepted()"><span>Accepteren</span></button>

          <div class="close">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_close.svg" alt="close" />
          </div>
        </div>
      </div>
    </div>
<?php 
  }
  if($popup['pop_up_visibility'] === 'ON'){


?>
    <div class="popup">
      <div class="overlay"></div>
      <div class="box">
        <span class="close-pop">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_close_0.svg" alt="close" />
        </span>

        <div class="text">
          <h2><?php echo $popup['pop_up_title']; ?></h2>

          <p><?php echo $popup['pop_up_description']; ?></p>

          <?php if($popup['action_button']){ ?>
          <a href="<?php echo $popup['action_button']['url']; ?>" class="btn-color" target="<?php echo $popup['action_button']['target']; ?>"><span><?php echo $popup['action_button']['title']; ?></span></a>
          <?php } ?>
        </div>

        <div class="image">
          <img src="<?php echo $popup['pop_up_image']['url']; ?>" alt="<?php echo $popup['pop_up_image']['alt']; ?>" />
        </div>
      </div>
    </div>

  <?php } ?> 

    <div class="responsive-footer-nav-holder">
      <?php $mobilefooter = get_field('mobile_footer_action_buttons','option'); ?>
      <ul>
        <li><a href="callto:<?php echo $mobilefooter['action_button_1']['mobile_number']; ?>"><img src="<?php echo $mobilefooter['action_button_1']['icon']; ?>" alt="icon"><?php echo $mobilefooter['action_button_1']['action_text']; ?></a></li>
        <li><a href="<?php echo $mobilefooter['action_button_2']['link']['url']; ?>" target="<?php echo $mobilefooter['action_button_2']['link']['target']; ?>"><img src="<?php echo $mobilefooter['action_button_2']['icon']; ?>" alt="icon"><?php echo $mobilefooter['action_button_2']['link']['title']; ?></a></li>
        <li><a href="<?php echo $mobilefooter['action_button_3']['link']['url']; ?>" target="<?php echo $mobilefooter['action_button_2']['link']['target']; ?>"><img src="<?php echo $mobilefooter['action_button_3']['icon']; ?>" alt="icon"><?php echo $mobilefooter['action_button_3']['link']['title']; ?></a></li>
        <li><a href="<?php echo $mobilefooter['action_button_4']['link']['url']; ?>" target="<?php echo $mobilefooter['action_button_4']['link']['target']; ?>"><img src="<?php echo $mobilefooter['action_button_4']['icon']; ?>" alt="icon"><?php echo $mobilefooter['action_button_4']['link']['title']; ?></a></li>
      </ul>
    </div>
    <script>
      var imageList = [
        <?php 

            $labels = [
            'post_type'      => 'team',
            'posts_per_page' => -1,
            'order' => 'DESC'
            ];
            $loop = new WP_Query($labels);
            if($loop->have_posts()){
            while ($loop->have_posts()) {
                $loop->the_post();

        ?>
        "<?php $teamimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $teamimage[0]; ?>",
        <?php } wp_reset_query();} ?>
    ];

    <?php $teamsection =  get_field('team_section'); ?>   
    </script>
    <?php 

    wp_footer();

    if($popup['pop_up_visibility'] === 'ON'){?>

      <script>
        $(function () {
                  
          if (localStorage.getItem('wasVisited') == undefined) {
              $(".popup").addClass("show");
              localStorage.setItem('wasVisited', 1);
          }  
        })
      </script>
      <?php }

    if($popup['pop_up_visibility'] === 'OFF'){?>
      <script>
        window.localStorage.removeItem('wasVisited');
      </script>
    <?php }
    
    if($cookiesopt['visibility'] === 'ON'){?>

      <script>
        if (localStorage.getItem('cookieserkelens') == undefined) {
          $(".cookies").addClass("show");
        }
        function cookiesaccepted() {
          localStorage.setItem('cookieserkelens', 'Accepted');
          $(".cookies").removeClass("show"); 
        }
      </script>
    <?php }

    if($cookiesopt['visibility'] === 'OFF'){?>
      <script>
        window.localStorage.removeItem('cookieserkelens');
      </script>
    <?php }
    
    
    
    ?>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </body>
</html>
