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
  <?php } ?>