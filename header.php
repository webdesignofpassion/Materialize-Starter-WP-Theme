<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
    
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php endif; ?>
    
    <?php wp_head(); ?>
    
</head>

<body>
    
    <header id="masthead" class="site-header" role="banner">
      <nav class="primary-color" role="navigation">
        <div class="nav-wrapper container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
                <?php if ( get_theme_mod( 'materilize-starter-wp-theme_logo' ) ) : ?>
                
	                   <?php echo '<img src="' . esc_url( get_theme_mod( 'materilize-starter-wp-theme_logo' ) ) . '" />'; ?>
                
                    <?php else: ?>
                
	                   <?php echo '<img src="' . esc_url( get_template_directory_uri() . '/img/default-logo.png')  . '" width="56px" height="56px" />'; ?>
                
                <?php endif; ?>
                
            </a>
            
          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons white-text">menu</i></a>
                
                    <ul class="right">
                                        
                        <li>
                            <a  href="#" data-activates="slide-out" class="button-collapse-sidebar"><i id="sidebar-icon" class="material-icons white-text">format_indent_decrease</i></a>
                        </li>
                        
                    </ul>

                    <?php if (has_nav_menu('header-menu')) : ?>
                   <?php wp_nav_menu( array(
							             'menu' => 'header-menu',
                                        'theme_location' => 'header-menu',
							             'menu_class'     => 'right hide-on-med-and-down',
                                        'container'         => false,
                                        'fallback'        => 'Materialize_Menu_Walker::fallback',
			                             'walker'         => new Materialize_Menu_Walker())
							                        );
							                        ?>

                        <?php   wp_nav_menu( array(
							                        'menu' => 'header-menu',
                                                    'theme_location' => 'header-menu',
							                        'menu_class'     => 'menu side-nav',
							                        'menu_id'        => 'mobile-nav',
							                        'items_wrap'     => '
                                                    <br>
                                                    <ul id="%1$s" class="%2$s">
                                                    <li><div class="userView">
                                                        <img src="' . esc_url( get_header_image() ) .'" alt="" class="background">
                                                        <a href="#!user" class="header-avatar-sidebar"><img class="circlize" src="' . esc_url( get_theme_mod( 'materilize-starter-wp-theme_avatar' )) . '" width="64" height="64"></a>
                                                        <a href="' .  esc_url( home_url( '/' ) )  . '"><span class="white-text name">' . get_bloginfo( 'name' ) . '</a>
                                                        <a href="#"><span class="white-text email">' . get_bloginfo( 'description' ) . '</span></a>
                                                        </div>
                                                    </li>
                                                        <li class="mobile-header center black-text">
                                                            <p>Menu <span id="close-sidebar-left" class="right"><i class="material-icons white-text medium pointer">close</i></span></a></p>
                                                        </li><ul class="collapsible" data-collapsible="accordion">%3$s</ul></ul>
                                                    <div class="clear"></div>',
                                            'fallback'        => 'Materialize_Mobile_Menu_Walker::fallback',
			                                'walker'         => new Materialize_Mobile_Menu_Walker())
							                        );
							                        ?>
                    <?php endif; ?>
        </div>
      </nav>
    </header>