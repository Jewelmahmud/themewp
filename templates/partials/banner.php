<?php $pagebackground = get_field('page_background');  ?>
<section     
  class="s-banner-team"    
  style="
    background: url(<?php if($pagebackground['url']){ echo $pagebackground['url'];}else{echo get_template_directory_uri().'/assets/img/banner-team.png';} ?>) no-repeat,-o-linear-gradient(346.13deg, #006AAE 6%, #00ADE4 114.76%);
    background: url(<?php if($pagebackground['url']){ echo $pagebackground['url'];}else{echo get_template_directory_uri().'/assets/img/banner-team.png';} ?>) no-repeat,linear-gradient(103.87deg, #006AAE 6%, #00ADE4 114.76%);
    background-size: cover;
  ">
    <div class="container" data-aos="fade-right">
      <h1><?php 
      if(is_search()){
        echo "Zoekresultaat";
      }else{
        the_title(); 
      } ?></h1>
      <ul class="breadcrumbs">
        <li>
          <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_home.svg" alt="home" /></a>
        </li>
        <?php if(is_singular('diensten')) {?>
        <li>
          <a class="b-middle" href="<?php bloginfo('home'); ?>/diensten">Diensten</a>
        </li>
        <?php } ?>
        <?php if(is_page_template( 'templates/team.php' )) {?>
        <li>
          <a class="b-middle" href="<?php bloginfo('home'); ?>/overons">Over VanErkelens</a>
        </li>
        <?php } ?>
        <li><span><?php 
          if(is_search()){
            echo "Zoekresultaat";
          }else{
            the_title(); 
          } ?></span>
        </li>
      </ul>
    </div>
</section>