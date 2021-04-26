


<?php
// Template Name: FAQ

get_header();?>

  <section class="s-faq">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <p>Filteren op:</p>
          <div class="area-slide">

            <div class="actions">
              <div class="btn-slide btn-prev"></div>
            </div>

            <div class="slide-tabs-faq">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" data-name="*" class="tab fap-tab active"><span>Alle</span></a>
                </div>
              <?php 

                $faqcategories = get_categories( array(
                  'taxonomy'  => 'faq_category',
                  'orderby'   => 'name',
                  'order'     => 'ASC'
                ) );
                $tabcounter = 0;
                if(!empty($faqcategories)){
                  foreach( $faqcategories as $faqcategory ) {
                    $tabcounter++;?>
                <div class="swiper-slide">
                  <a href="" data-name=".<?php echo str_replace(' ', '', trim(strtolower($faqcategory->name))); ?>" class="tab fap-tab"><span><?php echo $faqcategory->name; ?></span></a>
                </div>
              <?php } } ?>
              </div>
            </div>
  
            <div class="actions">
              <div class="btn-slide btn-next"></div>
            </div>
          </div>
        </div>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane faq-tabpan active" id="tabisoTope">

          <?php 
              $labels = [
                  'post_type'      => 'faq',
                  'posts_per_page' => -1,
                  'order'          => 'ASC'
              ];
              $loop = new WP_Query($labels);

              if($loop->have_posts()) {

              while($loop->have_posts()) {
                  $loop->the_post();

          ?>
            <div class="block js-faq <?php  
                $terms = get_the_terms( $post->ID, 'faq_category' );
                if($terms && count($terms) > 1){
                    foreach($terms as $term){
                    echo str_replace(' ', '', trim(strtolower($term->name))).' ';
                    }
                }else {
                    echo str_replace(' ', '', trim(strtolower($terms[0]->name))); 
                } ?>">
              <div class="item-freq">
                <h3><?php the_title(); ?></h3>

                <div class="icon"></div>
              </div>

              <div class="answer">
                <p><?php the_content(); ?></p>
              </div>
            </div>
            <?php }wp_reset_query(); } ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer();?>