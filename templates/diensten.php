<?php 

    // Template Name: Diensten

    get_header();

?>


<section class="s-service">
  <div class="container">
    <div class="all-services">

    <?php 

      $labels = [
        'post_type'      => 'diensten',
        'posts_per_page' => -1,
        'order' => 'ASC'
      ];
      $loop = new WP_Query($labels);
      if($loop){
        while ($loop->have_posts()) {
          $loop->the_post();

    ?>

      <a href="<?php the_permalink(); ?>" class="card-service" data-aos="flip-left">
        <div class="image">
          <?php the_post_thumbnail( 'newsbig', array() ); ?>
        </div>

        <div class="text">
          <h3><?php the_title(); ?></h3>
          <p>
            <?php the_excerpt(); ?>
          </p>

          <span class="meer">
            Lees meer
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow" />
          </span>
        </div>
      </a>

      <?php } wp_reset_query();} ?>
      
    </div>
  </div>
</section>


<?php get_footer(); ?>