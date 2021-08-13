<?php
/**
 * The template for displaying home pages
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package global_step
 */

get_header();
?>

  <!-- /.main start  -->
    <main class="main">  
    <!-- ============================
        START BANNER SECTION some changes in home.php file
    ============================== -->
    <section class="banner_area custom_height_mobile">
    <?php if( have_rows('slider_repeater') ): ?>
        <div class="banner_slider m_none">
            <?php while( have_rows('slider_repeater') ): the_row(); 
            $background_image = get_sub_field('background_image');
            $link = get_sub_field('link');
            ?>
            <div class="inner">
                   <?php if( $link ): 
                    $link_url = $link['url'];
                    ?>
                        <a href="<?php echo esc_url( $link_url ); ?>">
                        <?php  if( !empty( $background_image ) ): ?>
                            <img src="<?php echo esc_url($background_image['url']); ?>" alt="gift-card-image" class="img-fluid width_full" />
                        <?php endif; ?>
                        <div class="text">
                            <p><?php the_sub_field('subtitle'); ?></p>
                            <h2><?php the_sub_field('title'); ?></h2>
                            <button class="btn_transparent">
                            <?php the_sub_field('button_text'); ?>
                            </button>
                        </div>
                        </a>
                    <?php endif; ?>
            </div>
            <?php endwhile; ?> 
        </div>
    <?php endif; ?>
    <?php if( have_rows('slider_for_mobile') ): ?>
        <div class="banner_slider d_none">
        <?php while( have_rows('slider_for_mobile') ): the_row(); 
            $background_image = get_sub_field('background_image');
            $link = get_sub_field('link');
            ?>
            <div class="inner">
                   <?php if( $link ): 
                    $link_url = $link['url'];
                    ?>
                        <a href="<?php echo esc_url( $link_url ); ?>">
                        <?php  if( !empty( $background_image ) ): ?>
                            <img src="<?php echo esc_url($background_image['url']); ?>" alt="gift-card-image" class="img-fluid width_full" />
                        <?php endif; ?>
                        <div class="text">
                            <p><?php the_sub_field('subtitle'); ?></p>
                            <h2><?php the_sub_field('title'); ?></h2>
                            <button class="btn_transparent">
                            <?php the_sub_field('button_text'); ?>
                            </button>
                        </div>
                        </a>
                    <?php endif; ?>
            </div>
        <?php endwhile; ?> 
        </div>
    <?php endif; ?>
    </section>
    <!-- ============================
        START BANNER SECTION
    ============================== -->

    <!-- ============================
        START SPOTLIGHT SECTION
    ============================== -->
    <!-- <section class="spotlight_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 cp_10">
                    <div class="inner">
                        <a href="#">
                        <div class="img">
                          <img src="assets/media/images/new_arrival/1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text">
                            <h2>LINGERIE</h2>
                            <button class="btn_transparent">
                                SHOP NOW
                            </button>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 cp_10">
                    <div class="inner">
                        <a href="#">
                            <div class="img">
                                <img src="assets/media/images/new_arrival/2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>Nightwear</h2>
                                <button class="btn_transparent">
                                    SHOP NOW
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 cp_10">
                    <div class="inner">
                        <a href="#">
                            <div class="img">
                                <img src="assets/media/images/new_arrival/3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2>New In</h2>
                                <button class="btn_transparent">
                                    SHOP NOW
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ============================
        START SPOTLIGHT SECTION
    ============================== -->

    <section class="home_about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common_title">
                    <?php if( get_field('about_title') ): ?>
                        <h2><?php the_field('about_title'); ?></h2>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about_inner">
                    <?php if( get_field('about_benu') ): ?>
                        <?php the_field('about_benu'); ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================
        START SHOP BY CAT SECTION
    ============================== -->
    <section class="shop_by_cat_area">
        <div class="container">
            <?php 
            $taxonomyName = "product_cat";     
            $terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));
            $terms = get_field('select_category');
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="common_title">
                        <h2>SHOP BY CATEGORY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach ( $terms as $term ): ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="inner">
                        <a href="<?php echo get_term_link($term->name, $taxonomyName);?>">
                            <div class="img">
                            <?php
                             $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
                             // get the image URL for parent category
                             $image = wp_get_attachment_url($thumbnail_id);
                             // print the IMG HTML for parent category
                             $image_url = wp_get_attachment_image_src($image,'thumbnail_id');  
                            ?>
                                <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="text">
                                <h2><?php echo $term->name; ?></h2>
                                <div class="icon">

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ============================
        START SHOP BY CAT SECTION
    ============================== -->

    <!-- ============================
        START HOME HERO SECTION
    ============================== -->
    <section class="home_hero_area">
        <div class="img">
            <?php 
            $banner_image = get_field('banner_image');
            $link = get_field('link');
            if( !empty( $banner_image ) ): ?>
                <img src="<?php echo esc_url($banner_image['url']); ?>" alt="" class="img-fluid width_full m_none" />
            <?php endif; ?>
            <?php 
            $mobile_banner_image = get_field('mobile_banner_image');
            if( !empty( $mobile_banner_image ) ): ?>
                <img src="<?php echo esc_url($mobile_banner_image['url']); ?>" alt="" class="img-fluid width_full d_none" />
            <?php endif; ?>
        </div>
        <?php if( $link ): 
        $link_url = $link['url'];
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>">
        <div class="inner">
            <p><?php echo the_field('subtitle')?></p>
            <h2><?php echo the_field('title')?></h2>
            <button class="btn_transparent">
            <?php echo the_field('button_text')?>
            </button>
        </div>
        </a>
        <?php endif; ?>
    </section>
    <!-- ============================
        START HOME HERO SECTION
    ============================== -->

    <!-- ============================
        START BEST SELLER SECTION
    ============================== -->
    <section class="best_seller_area">
        <div class="container">
   
            <div class="row">
                <div class="col-12">
                    <div class="common_title">
                        <h2>Bestsellers</h2>
                    </div>
                </div>
              
                <div class="col-12">
            
                    <div class="best_seller_inner">
               
                        <div class="best_seller_slider">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'meta_key' => 'total_sales',
                                'orderby' => 'meta_value_num',
                                'posts_per_page' => -1,
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                            global $product;
                            ?>
                                        <div class="inner">
                                            <a href="<?php the_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); ?>
                                            </a>
                                            <h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                                            <p class="price">£<?php echo $product->get_price(); ?></p>
                                        </div>
                                        <?php
                            endwhile;
                            wp_reset_query();
                            ?>  
                            
                        </div>
                      
                    </div>
                   
                </div>
              
            </div>
           
        </div>
    </section>
    <!-- ============================
        START BEST SELLER SECTION
    ============================== -->

    <!-- ============================
            START SPOTLIGHT SECTION
        ============================== -->
    <section class="gift_card_area" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/media/images/banner/about-banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php if( have_rows('repeater_area') ): ?>
                    <div class="inner">
                    <?php while( have_rows('repeater_area') ): the_row(); 
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        ?>
                        <div class="inner_wrap">
                        <?php if( $link ): 
                            $link_url = $link['url'];
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>">
                                <div class="img">
                                  <?php  if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="gift-card-image" />
                                  <?php endif; ?>
                                </div>
                                <div class="text">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </a>
                            <?php endif; ?>
                        </div>
                     <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================
            START SPOTLIGHT SECTION
        ============================== -->

    <!-- ============================
        START BEST SELLER SECTION
    ============================== -->
    <section class="instagram_area">
        <div class="m_none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common_title">
                            <h2>INSTAGRAM</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="instagram_slider">
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/instagram/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/instagram/2.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/2.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/3.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/instagram/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/instagram/2.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/2.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/3.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_inner">
                                <a href="#">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/1.jpg" alt="" class="img-fluid width_full">
                                    </div>
                                    <div class="text">
                                        <div class="top">
                                            <span><i class="lni lni-heart"></i> 1.3k</span>
                                            <span><i class="lni lni-comments"></i> 1.5k</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, ipsam?</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d_none instagram_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common_title">
                            <h2>INSTAGRAM <br> @BENUPEN</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/1.jpg" alt="" class="width_full">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/4.jpg" alt="" class="width_full">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/3.jpg" alt="" class="width_full">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/4.jpg" alt="" class="width_full">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/5.jpg" alt="" class="width_full">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="instagram_mobile_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/new_arrival/6.jpg" alt="" class="width_full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!-- /.main start  -->

<?php

get_footer();