<?php 

// Single Template 

get_header();


?>



  <section class="s-banner-blog-detail">
    <div class="container">
      <a href="javascript:history.back()" class="back"
        ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow_back.svg" alt="arrow" />
        <span>Back</span></a
      >
      <ul class="breadcrumbs">
        <li>
          <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_home.svg" alt="home" /></a>
        </li>
        <li>
          <a href="<?php bloginfo('home'); ?>/nieuws"><span>Nieuws</span></a>
        </li>
        <li>
          <span><?php the_title(); ?></span>
        </li>
      </ul>
    </div>
  </section>

  <section class="s-post-blog">
    <div class="container">
      <div class="image">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_post_blog_larger.png" alt="image blog post" /> -->
        <?php the_post_thumbnail( 'full', array()); ?>
      </div>

      <div class="content">
        <div class="content-post news-content">
          <div class="title">
            <div class="infos">
              <?php $categories = get_the_category(); ?>
              <div class="tag"><span><?php 
                  if($categories && count($categories) > 1){
                    foreach($categories as $category){
                      echo $category->name.' ';
                    }
                  }else {
                    echo $categories[0]->cat_name; 
                  }
                
                ?></span></div>
              <div class="date"><span><?php echo get_the_date('d M Y'); ?></span></div>
            </div>

            <h1><?php the_title(); ?></h1>
            <hr id="grayline">
          </div>
          

          <?php 

            if(have_posts()){
              while(have_posts()){
                the_post();
                echo wpautop(get_the_content(), $br = true);
              }
            }

          ?>
          
        </div>

        <div class="box-social">
          <ul class="socials">
            <li>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_blue.svg" alt="facebook">
              </a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?text=Check Out this link <?php the_permalink(); ?>" target="_blank" rel="noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp_blue.svg" alt="whatsapp">
              </a>
            </li>
            <li>
              <a href="mailto:?subject=I wanted you to check out this link &amp;body=Check out this site <?php the_permalink(); ?>" target="_blank" rel="noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email_blue.svg" alt="email">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/share?hashtags=awesome,sharing&text=<?php the_permalink(); ?>" target="_blank" rel="noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_blue.svg" alt="twitter">
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" rel="noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin_blue.svg" alt="linkedin">
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <?php 

$args = array(
  'category__in'  =>  wp_get_post_categories($post->ID),
  'numberpost'    =>  -1,
);

$relatedposts = get_posts($args);
$postID = $post->ID;

if(count($relatedposts) > 1){?>
  <section class="s-gerelateerde">
    <div class="container">
      <h2 data-aos="fade-right">Gerelateerde nieuws items</h2>

      <div class="slide-gerelateerde">
          <div class="swiper-wrapper">
          <?php 
              setup_postdata($post);
              foreach($relatedposts as $post){
                if($postID == $post->ID){
                  echo "";
                }else{

          ?>
            <div class="swiper-slide" data-aos="flip-left">
              <a href="<?php the_permalink(); ?>" class="card-nieuws">
                <div class="image">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_01.png"
                    alt="image card"
                  />
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
          
                  <h3><?php the_title(); ?></h3>

                  <p><?php the_excerpt(); ?></p>

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
  </section> 
<?php } ?>


<?php get_footer(); ?>