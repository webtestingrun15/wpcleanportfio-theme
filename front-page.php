<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ( is_user_logged_in() ) { ?>
          <a href="<?php echo wp_logout_url(); ?>">Logout</a>
            <?php get_template_part( 'template-parts/content', 'page' ) ?>
          <?php } else { ?>
              <?php
                $args = [
                  'label_username' => 'Enter your username',
                  'label_password' => 'Enter your password'
                ]; //check codex for wp_login_form for args
                wp_login_form($args);
              ?>
            <?php wp_register( '<button class="button button-primary">' ,'</button>' ); ?>
        <?php } ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ) ?>

      <?php endif; ?>

      <p>Template: front-page.php</p>

    </main>

  </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
