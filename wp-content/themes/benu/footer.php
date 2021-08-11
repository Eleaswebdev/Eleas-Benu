<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package benu
 */

?>

    <!-- ============================
        START FOOTER SECTION
    ============================== -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_inner">
                        <h2 class="title">Our Worlds</h2>
                        <ul class="footer_menu">
                        <?php dynamic_sidebar('footer-1'); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_inner">
                        <h2 class="title mb_15">STAY CONNECTED</h2>
                        <p>Never miss out again. Sign up for exclusive news and offers.</p>
                        <div class="newsletter">
                            <input type="text" placeholder="Email Address">
                            <button class="btn">Join</button>
                        </div>
                        <h2 class="title mb_15">FOLLOW US</h2>
                        <?php if( have_rows('social_area','option') ): ?>
                            <ul class="footer_social">
                                <?php while( have_rows('social_area','option') ): the_row(); 
                                     $link = get_sub_field('link','option');
                                    ?>
                                    <li>
                                    <?php if( $link ): 
                                    $link_url = $link['url'];
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>"><?php the_sub_field('icon','option'); ?></a>
                                    <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_inner">
                        <h2 class="title">USEFUL LINKS</h2>
                        <ul class="footer_menu">
                        <?php dynamic_sidebar('footer-3'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <?php
                        $copyright_area = get_field('copyright_area','option');
                        if( $copyright_area ): ?>
                        <img src="<?php echo esc_url( $copyright_area['image']['url'] ); ?>" alt="" class="img-fluid">
                        <?php echo $copyright_area['copyright_text']; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================
        START FOOTER SECTION
    ============================== -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
