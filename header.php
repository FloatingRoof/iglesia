<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header class="top_header">
        <div class="wrapper cf">
            <div class="header_third search_section menu_button cf">
                <div class="menu_icon">
                    <i class="fa fa-bars"></i>
                    <i style="display: none" class="fas fa-times"></i>
                </div>
                <div class="search_box"> <?php echo get_search_form(); ?></div>
            </div>
            <div class="header_third logo_section">
                <?php if(ale_get_option("sitelogo")) { ?>
                  <a class="logo_link" href="<?php echo home_url("/");?>"><img src="<?php echo ale_get_option("sitelogo")?>" /> </a>
                <?php } ?>
            </div>
            <div class="header_third social_section">
                <?php if(ale_get_option('yt')) { ?><a href="<?php echo ale_get_option('yt') ?>"><i class="fab fa-youtube"></i></a><?php } ?>
                <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta') ?>"><i class="fab fa-instagram"></i></a><?php } ?>
                <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi') ?>"><i class="fab fa-twitter"></i></a><?php } ?>
                <?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb') ?>"><i class="fab fa-facebook-f"></i></a><?php } ?>
            </div>
        </div>
        <nav class="top_navigation">
            <div class="wrapper">
                <?php
                if ( has_nav_menu( 'header_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_menu',
                        'menu'			=> 'Hooter Menu',
                        'menu_class'	=> 'headermenu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
                <div class="donate_button">
                    <a href="<?php //echo ale_get_option('donate_link') ?>"><?php _e('Donate','iglesia') ?></a>
                </div>
            </div>
        </nav>
    </header>
    <?php if(!is_page_template('page-home.php')) { ?>
        <section class="inner_header">
            <div class="wrapper">
                <?php get_breadcrumbs(); ?>
            </div>
        </section>
    <?php } ?>
