<form class="cf" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <section>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Szukaj...', 'epic' ); ?>" />
        <input type="submit" id="searchsubmit" class="submit" value="<?php esc_attr_e( 'Szukaj', 'epic' ); ?>" />
    </section>
</form>