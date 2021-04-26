<?php get_header(); ?>


  <!-- ========== MAIN CONTENT ========== -->

  <section class="s-404">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h1>
            Oeps... <br />
            Pagina niet gevonden
          </h1>
          <p>
            Onze fout. Misschien bestaat de pagina die je zocht niet meer. Of is
            hij verplaatst. Klik hieronder om terug te gaan naar de homepagina.
            Succes!
          </p>

          <a href="<?php bloginfo('home');?>" class="btn"><span>Terug naar homepagina</span></a>
        </div>

        <div class="image" data-aos="fade-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_404.png" alt="image 404">
        </div>
      </div>
    </section>

<?php get_footer(); ?>