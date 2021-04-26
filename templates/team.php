


<?php
// Template Name: Team

get_header();?>

<section class="s-info-team">
      <div class="container">
        <div class="content">
        <?php 

            $labels = [
            'post_type'      => 'team',
            'posts_per_page' => -1,
            'order' => 'DESC'
            ];
            $loop = new WP_Query($labels);
            $postnumber = $loop->found_posts;
            if($loop->have_posts()){
            for ($x = 0; $x <= 2; $x++) {
                $loop->the_post();

        ?>
          <div class="card-team" data-aos="flip-left">

            <a href="<?php the_permalink(); ?>">
              <div class="image">
                <?php the_post_thumbnail( 'full', array('class' => 'img') ); ?>
                <div class="link" style="<?php echo (get_field('linkedin_profile_url')) ? '' : 'display:none;'; ?>">
                  <a href="<?php the_field('linkedin_profile_url'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"></a>
                </div>
              </div>
            </a>
            
            <div class="text">
              <h3><?php the_title(); ?></h3>
              <span class="role"><?php the_field('aanwijzing'); ?></span>
              <p><?php echo wp_trim_words( get_the_excerpt(), 14, '...' ) ?></p>
              
              <a href="<?php the_permalink() ?>" class="meer"><span>Lees meer</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"></a>
            </div>
          </div>
        <?php }wp_reset_query();} ?>

        </div>
      </div>

      <div class="box">
        <div class="container">
            <div class="left">
              <?php $teamactionlogo = get_field('action_logo'); ?>
              <img src="<?php echo $teamactionlogo['url'] ?>" alt="<?php echo $teamactionlogo['alt'] ?>">
              <h4><?php the_field('action_title'); ?></h4>
            </div>

            <div class="right">
              <p><?php the_field('action_description'); ?></p>
              <?php $teamaction = get_field('action_button'); ?>
              <a href="<?php echo $teamaction['url']; ?>" target="<?php echo $teamaction['target']; ?>"><span><?php echo $teamaction['title']; ?></span></a>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="content">
        <?php 

                        
            $postnumber = $loop->found_posts;
            if($loop->have_posts()){
            for ($x = 3; $x < $postnumber; $x++) {
                $loop->the_post();

        ?>
          <div class="card-team" data-aos="flip-left">
            <a href="<?php the_permalink(); ?>">
              <div class="image">
                <?php the_post_thumbnail( 'full', array('class' => 'img') ); ?>
                <div class="link" style="<?php echo (get_field('linkedin_profile_url')) ? '' : 'display:none;'; ?>">
                    <a href="<?php the_field('linkedin_profile_url'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_linkedin.svg" alt="linkedin"></a>
                </div>
              </div>
            </a>

            <div class="text">
              <h3><?php the_title(); ?></h3>
              <span class="role"><?php the_field('aanwijzing'); ?></span>
              <p><?php echo wp_trim_words( get_the_excerpt(), 14, '...' ) ?></p>
              <a href="<?php the_permalink(); ?>" class="meer"><span>Lees meer</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right_blue.svg" alt="arrow"></a>
            </div>
          </div>

        <?php }wp_reset_query();} ?>

        </div>
      </div>
    </section>
<?php get_footer();?>