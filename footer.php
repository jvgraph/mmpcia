<div id="mega-footer" class="container">
    <div class="row">
        <ul>
            <li class="mega-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mmpcia-footer-logo.png" alt="mmpcia" width="100" height="auto">
            </li>
            <li class="mega-item">
                <h2>Contact Us</h2>
                <p>
                PO BOX 3270 New York 10027 <br>
                P: 212.369.4241 <br>
                E: info@mmpcia.org
                </p>
            </li>
            <li class="mega-item">
                <h2>Quick Links</h2>
                <div class="row">
                    <div class="half"></div>
                    <div class="half">
                        <?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							) );
						?>
                    </div>
                </div>
            </li>
            <li class="mega-item">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'mmpcia_social',
                        'menu_class'     => 'social-links-menu',
                        'depth'          => 1,
                    ) );
				?>
            </li>
        </ul>
    </div>
</div>
<?php
 require_once( get_template_directory() . '/footer.php' );
?>