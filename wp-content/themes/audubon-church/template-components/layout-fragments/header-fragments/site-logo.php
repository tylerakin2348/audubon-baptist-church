<!-- logo code written by Kirk Wight of Automatic : Thanks Kirk :) -->
<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
    <div class='site-logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
        <div class="site-logo__container">
            <div class='site-logo'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></div>
            <span class='site-description'><?php bloginfo( 'description' ); ?></span>
        </div>
<?php endif; ?>
