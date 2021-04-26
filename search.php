<?php
/**
 * Template Search Page
 *
 * @package Gisola
 * @author Jewel
 * @link Fhttp://huqson.nl
 */

get_header();
?>
<section class="s-all-nieuws">
    <div class="container">
      <div class="post-content">
        <div class="all-posts allnews">
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $labels = [
            'post_type'      => 'post',
            'posts_per_page' => 16,
            'paged'          =>  1,
            'order'          => 'DESC',
          ];
          $loop = new WP_Query($labels);
          $counter = 0;
          if(have_posts()){
            while (have_posts()) {
              the_post();
              $counter++;
        
              $categories = get_the_category(); ?>
          <a href="<?php the_permalink(); ?>" class="card-nieuws <?php 
          
          if($categories && count($categories) > 1){
            foreach($categories as $category){
              echo str_replace(' ', '', trim(strtolower($category->name))).' ';
            }
          }else {
            echo str_replace(' ', '', trim(strtolower($categories[0]->cat_name))); 
          }
        
        ?>">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_card_nieuws_01.png" alt="image card" />
              <?php the_post_thumbnail( 'newsbig' ) ?>

              <div class="tag" style="<?php echo ($categories)? 'opacity:1;': 'opacity:0;';?>"><span><?php 
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

              <h3 class="post-title"><?php the_title(); ?></h3>

              <p><?php the_excerpt(); ?></p>

              <span>
                Lees meer
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
              </span>
            </div>
          </a>
          <?php }wp_reset_query(); } ?>
        </div>
      </div>

    </div>
  </section>

<?php get_footer();