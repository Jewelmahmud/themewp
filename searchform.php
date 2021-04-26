<form action="<?php echo home_url('/'); ?>" class="search" method="GET">
    <input type="text" class="input-busca" name="s" id="s" placeholder="Zoeken naar..." id="search" value="<?php echo get_search_query(); ?>">
    <button type="submit">
    <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_nav_search.svg" alt="icon search">
    </div>
    </button>
</form>