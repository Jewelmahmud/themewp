<?php 

// Template name: Nieuws
  get_header();


  global $wp_query;

 

?>

<section class="s-all-nieuws search-result">
    <div class="container">
      <?php 
          $labels = [
            'post_type'      => 'post',
            'posts_per_page' => 1,
            'order'          => 'DESC',
          ];
          $loop = new WP_Query($labels);

          if($loop->have_posts()){
          while ($loop->have_posts()) {
            $loop->the_post();
            $counter++;
      
      ?>
      <a href="<?php the_permalink(); ?>" class="featured" data-aos="fade-up">
        <div class="image">
          
          <?php the_post_thumbnail('full'); ?>
        </div>

        <div class="text">
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

          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <span class="lmeer"
            >Lees meer <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"
          /></span>
        </div>
      </a>
      <?php } wp_reset_query(); } ?>


      <div class="content" data-aos="fade-right">
        <div class="area-slide">
          <div class="actions">
            <div class="btn-slide btn-prev"></div>
          </div>

          <div class="slide-tabs">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#" class="tab newsselector" data-name="*"><span>Alle</span></a>
              </div>
              <?php              
              
                $newscategories = get_categories( array(
                  'orderby'   => 'name',
                  'order'     => 'ASC'
                ) );

                foreach( $newscategories as $newscategory ) {                  
                  
              ?>              
                <div class="swiper-slide">
                  <a href="#" class="tab newsselector" data-name=".<?php echo str_replace(' ', '', trim(strtolower($newscategory->name))); ?>"><span><?php echo $newscategory->name; ?></span></a>
                </div>
              <?php } unset($newscategory); ?>
            </div>
          </div>

          <div class="actions">
            <div class="btn-slide btn-next"></div>
          </div>
        </div>
        
        <form action="" class="search">
          <button type="submit">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_search.svg" alt="icon search" />
            </div>
          </button>
          <input
            type="text"
            class="input-busca"
            name="search"
            placeholder="Zoeken naar..."
            id="search"
          />
        </form>
      </div>

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
          if($loop->have_posts()){
            while ($loop->have_posts()) {
              $loop->the_post();
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

              <h3 class="post-title"><?php huqsonExcerpt(get_the_title(), 45); ?></h3>
              <p><?php huqsonExcerpt(get_the_excerpt(), 85); ?></p>

              <span>
                Lees meer
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
              </span>
            </div>
          </a>
          <?php }wp_reset_query(); } ?>
        </div>
      </div>
      <div class="loadingSec">
        <div class="loading"></div>
        <a href="#" class="btn-color" data-aos="fade-up" id="loadmore"><span>Laad meer</span></a>
      </div>
      
    </div>
  </section>


<?php


 get_footer();?>