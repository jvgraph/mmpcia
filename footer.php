
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="sponsors">
    <?php 
        if( have_rows('sponsors', 'option') ): 
    ?>

    <ul>

    <?php 
        while( have_rows('sponsors', 'option') ): the_row(); 
    ?>

        <li>
        <?php  
            $image = get_sub_field('image'); 
        ?>
            <h3>

                <a href="<?php   ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php  the_sub_field('name'); ?>">
                </a>
            </h3>
        </li>

    <?php endwhile; ?>

    </ul>

<?php endif; ?>
</div>
		</div><!-- .site-content -->


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
                E: <a href="mailto:info@mmpcia.org">info@mmpcia.org</a>
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
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</span>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
