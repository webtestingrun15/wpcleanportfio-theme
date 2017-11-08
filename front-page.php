<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <?php if ( is_user_logged_in() ) { ?>
            <a href="<?php echo wp_logout_url(); ?>">Logout</a>
            <?php get_template_part( 'template-parts/content', 'page' ) ?>
        <?php } else { ?>
          <a href="/wp-login.php" title="Members Area Login" rel="home">Members Area</a>
          <br>
          <?php wp_register( '<p>' ,'<p>' ); ?>
        <?php } ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ) ?>

      <?php endif; ?>

      <p>Template: front-page.php</p>

    </main>

  </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
