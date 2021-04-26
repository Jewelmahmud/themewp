<?php

// Exit if accessed directly ---------------------------------------------------
if( !defined( 'ABSPATH' ) ) {
    die;
}



function loadMoreJS() { 
    if(is_page('nieuws')){

?>
    
	<script type="text/javascript" >
        $(document).ready(function() {

            var page = 2;
            
            

            $('#loadmore').on('click', function(e){ 
                e.preventDefault();       
                console.log('Posts is loading well');
                $('.loading').addClass('isActive');
                
                var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';
                var data = {
                    'action': 'load_more',
                    'page': page
                };
                
                $.post(ajaxurl, data, function(response) {

                    console.log(response.length);

                    if(response.length > 140){
                        $('.all-posts').append( response ).fadeIn()
                        .isotope( 'reloadItems' ).isotope({ sortBy: 'original-order' });
                    }else{
                        $('#nomorepost').append(response);
                        $('#loadmore').fadeOut(1000);
                    }

                    $('.loading').removeClass('isActive');
                    
                    console.log(page++);
                    page++;
                    
                });

            });
        });
    </script> <?php
    }
}

    add_action( 'wp_footer', 'loadMoreJS', 100);





function load_more() {

            $labels = [
                'post_type'      => 'post',
                'posts_per_page' => 16,
                'paged'          =>  $_POST['page'],
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
            <?php }wp_reset_query(); }else{
                echo "<p>Sorry, er zijn geen berichten meer gevonden</p>";
            } ?>





        <?php 
        //             } wp_reset_query();
        // }else {
        //     
        // }

        wp_die();
}

if(is_user_logged_in()){
    add_action( 'wp_ajax_load_more', 'load_more' );
}else{
    add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
}