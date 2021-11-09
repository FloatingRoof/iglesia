    <!-- Footer -->
    <footer class="main-footer">
        <div class="top_footer">
            <div class="wrapper">
                <div class="footer_logo footer_inner">
                    <?php if(ale_get_option("sitelogofooter")) { ?>
                        <a class="logo_link" href="<?php echo home_url("/");?>"><img src="<?php echo ale_get_option("sitelogofooter")?>" /> </a>
                    <?php } ?>
                </div>
                <div class="menu_info footer_inner">
                    <h5><?php _e('Information', 'aletemes')?></h5>
                    <!-- Footer Menu -->
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </div>
                <div class="contact footer_inner">
                    <h5><?php _e('Contacts', 'aletemes')?></h5>
                    <?php if(ale_get_option('footer_phone')) { ?>
                        <div class="footer_phone">
                            <a href="tel:<?php echo ale_get_option('footer_phone') ?>"><?php echo ale_get_option('footer_phone') ?></a>
                        </div>
                    <?php } ?>

                    <?php if(ale_get_option('footer_address')) { ?>
                        <div class="footer_address"><?php echo ale_get_option('footer_address') ?></div>
                    <?php } ?>

                    <?php if(ale_get_option('footer_email')) { ?>
                        <div class="footer_email">
                            <a href="mailto:<?php echo ale_get_option('footer_email') ?>"><?php echo ale_get_option('footer_email') ?></a>
                        </div>
                    <?php } ?>


                </div>
                <div class="twitter footer_inner">
                    twitter
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="wrapper">
                <div class="copyrights">
                    <!-- Copy -->
                    <?php if (ale_get_option('copyrights')) : ?>
                        <?php echo ale_get_option('copyrights'); ?>
                    <?php else: ?>
                        &copy; <?php _e('2021 All Right Reserved', 'aletheme')?>
                    <?php endif; ?>
                </div>

            <div class="footer_social">
                <?php if(ale_get_option('yt')) { ?><a href="<?php echo ale_get_option('yt') ?>"><i class="fab fa-youtube"></i></a><?php } ?>
                <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta') ?>"><i class="fab fa-instagram"></i></a><?php } ?>
                <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi') ?>"><i class="fab fa-twitter"></i></a><?php } ?>
                <?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb') ?>"><i class="fab fa-facebook-f"></i></a><?php } ?>
            </div>
            </div>
        </div>
    </footer>

        <!-- Social
        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul>
 -->



    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>