<?php get_header(); ?>

    <section class="s-zorg">
      <div class="container">
        <div class="left" data-aos="fade-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_shield.svg" alt="shield" />
          <h2>
            Van Erkelens. <br />
            Uw vraag is onze zorg.
          </h2>
          <p>
            Posuere amet imperdiet purus egestas sit egestas sem. Mi lectus
            porttitor in massa consequat.
          </p>

          <div class="actions">
            <div class="btn-slide btn-prev"></div>
            <div class="btn-slide btn-next"></div>
          </div>
        </div>

        <div class="slide-zorg" data-aos="fade-up">
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <a href="#">
                <h3>Ik zit met een zakelijk conflict waar ik niet uitkom.</h3>

                <span
                  >Lees meer <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"
                /></span>
              </a>
            </div>

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

                <span
                  >Lees meer <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"
                /></span>
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
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_01.png" alt="image team" />
          </div>
          <a href="" class="txt">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_koffer.svg" alt="koffer" />
            <span>Kom je ons versterken</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_arrow_down.svg" alt="arrow" />
          </a>
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_02.png" alt="image team" />
          </div>
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_03.png" alt="image team" />
          </div>
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_04.png" alt="image team" />
          </div>
          <div class="square"></div>
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_05.png" alt="image team" />
          </div>
          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_01.png" alt="image team" />
          </div>
          <div></div>

          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_06.png" alt="image team" />
          </div>
          <div class="txt-larger">
            <span>Volg ons op </span>
            <?php $socialMedia = get_field('social_media', 'option'); ?>
            <ul>
              <?php if(!empty($socialMedia['facebook_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['facebook_url'];?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_facebook.svg" alt="facebook"
                /></a>
              </li>
              <?php } if(!empty($socialMedia['linkedin_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['linkedin_url'];?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"
                /></a>
              </li>
              <?php } if(!empty($socialMedia['instagram_url'])){ ?>
              <li>
                <a href="<?php echo $socialMedia['instagram_url'];?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_instagram.svg" alt="instagram"
                /></a>
              </li>
              <?php } ?>
            </ul>
          </div>

          <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustra_team_07.png" alt="image team" />
          </div>
        </div>

        <div class="right" data-aos="fade-left">
          <h2>Meer weten over ons en ons team?</h2>

          <p>
            Bij Van Erkelens werkt een getalenteerd team in goede harmonie
            samen. Onze kernwaarden geven goed weer hoe we met elkaar, met onze
            klanten en met onze omgeving...
          </p>

          <a href="#">
            <span>Ontmoet ons team</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
          </a>
        </div>
      </div>
    </section>

    <section class="s-nieuws">
      <div class="container">
        <div class="top">
          <h2 data-aos="fade-right">Bekijk hier onze laatste nieuws.</h2>

          <ul class="tabs" data-aos="fade-left">
            <li class="active">
              <a href="#nieuws"
                ><div class="icon"></div>
                <span>Nieuws</span></a
              >
            </li>
            <li>
              <a href="#whitepapers"
                ><div class="icon"></div>
                <span>Whitepapers</span></a
              >
            </li>
          </ul>
        </div>

        <div class="tab-content">
          <div class="content active" id="nieuws">
            <div class="slide-nieuws">
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-aos="fade-right">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_01.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide" data-aos="fade-up">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_02.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Salaris</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide" data-aos="fade-down">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_03.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide" data-aos="fade-left">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_04.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_02.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Salaris</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_03.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>
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
                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_01.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_02.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Salaris</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_03.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_04.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="card-nieuws">
                    <div class="image">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_01.png"
                        alt="image card"
                      />
                      <div class="tag"><span>Fiscaal</span></div>
                    </div>

                    <div class="text">
                      <div class="date">
                        <span>24 aug 2020</span>
                      </div>

                      <h3>Mauris praesent odio quis vitae a aliquam urna.</h3>

                      <p>
                        Posuere amet imperdiet purus egestas sit egestas sem. Mi
                        lectus porttitor in massa consequat.
                      </p>

                      <span>
                        Lees meer
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
                      </span>
                    </div>
                  </a>
                </div>
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