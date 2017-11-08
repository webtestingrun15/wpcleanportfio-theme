<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <h1><?php esc_html_e( '404', 'cleanportfolio' ); ?></h1>

  </header>

  <div class="entry-content">

    <p><?php esc_html_e( 'Sorry! No content found.', 'cleanportfolio' ); ?></p>

    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>

  </div>

</article>
