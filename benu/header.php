<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package benu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'benu' ); ?></a>

    <!-- ============================
        START HEADER SECTION
    ============================== -->
    <header class="header_area ">
        <div class="header_top above_ipad">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner">
                            <p>our company will be closed in August, so we will accept online orders but won’t ship them till the beginning of
                            September.</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="above_ipad">
            <div class="header_logo">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header_logo_inner">
                                <div class="search">
                                    <input type="search" placeholder="Search our store">
                                    <button type="submit" class="btn icon-fallback-text">
                                        <svg class="icon icon-search" width="16" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 13C13 12.6 13.4 12.2 13.7 11.7C14.8 10.1 15.3 8.09999 15 6.19999C14.7 4.29999 13.6 2.59999 12 1.39999C10.4 0.299994 8.40002 -0.200006 6.50002 0.0999937C2.50002 0.799994 -0.199978 4.59999 0.500022 8.59999C0.800022 10.5 1.90002 12.2 3.50002 13.4C4.80002 14.3 6.20002 14.8 7.80002 14.8C8.20002 14.8 8.60002 14.8 9.00002 14.7C9.80002 14.6 10.6 14.3 11.3 13.9L14.1 18L15.3 17.1L12.5 13ZM8.70002 13.2C7.20002 13.5 5.60002 13.1 4.30002 12.2C3.00002 11.3 2.20002 9.89999 1.90002 8.39999C1.40002 5.19999 3.50002 2.19999 6.70002 1.59999C7.00002 1.49999 7.40002 1.49999 7.70002 1.49999C10.5 1.49999 13 3.49999 13.5 6.39999C13.8 7.89999 13.4 9.49999 12.5 10.8C11.6 12.1 10.3 12.9 8.70002 13.2Z"
                                                fill="black"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="logo">
									<a href="<?php echo get_home_url(); ?>">
										<?php 
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										echo '<img class="img-fluid" src="'.$image[0].'">';
										?>
									</a>
                                </div>
                                <div class="header_cart">
                                    <ul>
                                        <li><a href="#">Log in </a> <a href="#">Sign up</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Wishlist <span>(0)</span></a></li>
                                        <li class="h_cart"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/cart-icon.svg" alt=""> <span>0</span></a></li>
                                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_menu_area">
                <div class="header_menu">
                    <div class="container">
                        <div class="row">
                            <div class="menu_inner">
                                <div class="header_menu_wrap">
                                    <ul>
                                        <li>
                                        <?php quadmenu(array("theme_location" => "menu-1", "theme" => "default_theme")); ?>
                                        </li>
                                      
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="below_ipad header_mobile fixed-top">
            <div class="header_logo ">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header_logo_inner">
                                <div class="menu_bar">
                                    <ul>
                                        <li><i class="lni lni-menu"></i></li>
                                        <li><i class="lni lni-search-alt"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
								   <a href="<?php echo get_home_url(); ?>">
										<?php 
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										echo '<img class="img-fluid" src="'.$image[0].'">';
										?>
									</a>
                                </div>
                                <div class="header_cart">
                                    <ul>
                                        <li><a href="#"><i class="lni lni-heart"></i> </a></li>
                                        <li><a href="#"><i class="far fa-user"></i></a></li>
                                        <li class="h_cart"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/cart-icon.svg" alt=""> <span>0</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_height"></div>

        <div class="mobile_overlay"></div>
        <div class="mobile_menu">
            <div class="search_wrap">
                <div class="search">
                    <input type="search" placeholder="Search our store">
                    <button type="submit" class="btn icon-fallback-text">
                        <svg class="icon icon-search" width="16" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 13C13 12.6 13.4 12.2 13.7 11.7C14.8 10.1 15.3 8.09999 15 6.19999C14.7 4.29999 13.6 2.59999 12 1.39999C10.4 0.299994 8.40002 -0.200006 6.50002 0.0999937C2.50002 0.799994 -0.199978 4.59999 0.500022 8.59999C0.800022 10.5 1.90002 12.2 3.50002 13.4C4.80002 14.3 6.20002 14.8 7.80002 14.8C8.20002 14.8 8.60002 14.8 9.00002 14.7C9.80002 14.6 10.6 14.3 11.3 13.9L14.1 18L15.3 17.1L12.5 13ZM8.70002 13.2C7.20002 13.5 5.60002 13.1 4.30002 12.2C3.00002 11.3 2.20002 9.89999 1.90002 8.39999C1.40002 5.19999 3.50002 2.19999 6.70002 1.59999C7.00002 1.49999 7.40002 1.49999 7.70002 1.49999C10.5 1.49999 13 3.49999 13.5 6.39999C13.8 7.89999 13.4 9.49999 12.5 10.8C11.6 12.1 10.3 12.9 8.70002 13.2Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="menu-list clearfix">
                <ul id="menu-content" class="menu-content">
                <?php quadmenu(array("theme_location" => "menu-1", "theme" => "default_theme")); ?>
                </ul>
            </div>

            <div class="bottom_menu_list clearfix">
                <ul>
                    <li><a href="#">About Benu</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Ordering and Delivery</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#"><i class="far fa-user mr_10"></i> Account</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/images/cart-icon.svg" class="mr_10" alt=""> Cart</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt mr_10"></i> Find a Retailer</a></li>
                </ul>
            </div>
        </div>

    </header>
    <!-- ============================
        END HEADER SECTION
    ============================== -->
