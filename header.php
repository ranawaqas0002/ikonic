<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikonic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css"/>
	<link defer href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/stylesheet.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>

	<script>
    document.addEventListener('DOMContentLoaded', function () {
        var hamburgerBtn = document.getElementById('hamburger-menu');
        var mobileMenu = document.querySelector('.mobile-menu');

        hamburgerBtn.addEventListener('click', function () {
            if (mobileMenu.style.display === 'block' || mobileMenu.style.display === '') {
                mobileMenu.style.display = 'none';
            } else {
                mobileMenu.style.display = 'block';
            }
        });
    });
</script>

</head>
<style>
	header#header img {
    max-width: 192px;
    width: 100%;
}
header#header .row{
	align-items: center;
}
ul#menu-menu-1 a:hover {
    color: #326295;
}
.mobile-menu {
        display: none;
    }
    ul#menu-menu-2 {
    display: block;
}
ul#menu-menu-2 li {
    margin-bottom: 10px;
    color: #545454;
    text-decoration: none;
    list-style: none;
}
ul#menu-menu-2 li a {
    color: #545454;
    text-decoration: none;
    font-size: 16px;
}
ul#menu-menu-2 li a:hover {
    color: #326295;
}
button.btn.btn-primary.humburger {
    background-color: #326295;
    border: none;
}

    @media screen and (max-width: 767px) {
        .mobile-menu {
            display: block;
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
        }

        .mobile-menu li {
            margin-bottom: 10px;
        }
    }
    
@media (min-width:1024px) and (max-width:1199px){
	header#header ul li {
    margin-right: 30px;
}
}
@media (min-width:768px) and (max-width: 1024px){
	ul#menu-menu-1 a{
		font-size: 16px;
		line-height: 20px;
	}
	header#header ul li {
    margin-right: 10px;
}
}
@media screen and (min-width: 768px) {
	button.btn.btn-primary.humburger {
    display: none;
}
	
}
@media screen and (max-width:767px) {
	ul#menu-menu-1{
		display: none;
	}
	button#hamburger-menu {
    background-color: #326295;
    color: #ffffff;
    padding: 5px 11px;
    border: none;
    outline: none;
}
	
}
</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ikonic' ); ?></a>

	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-10"><a href="#" id="mainlogo" class="animate" data-animate="fade-in-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-ikonic1.jpg" alt=""></a></div>
          <div class="col-lg-9 col-md-9 col-2 right">
		  

            <?php
              // Loading WordPress Custom Menu (theme_location).
              wp_nav_menu(
                array(
                  'container'      => '',
                  // 'menu_id' => 'header-menu',
                  // 'menu_class'     => 'navbar-nav'
                )
              );
            ?>


                <button class="btn btn-primary humburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">&#9776;</button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">iKonic Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <div>
                <?php
              // Loading WordPress Custom Menu (theme_location).
              wp_nav_menu(
                array(
                  'container'      => '',
                  // 'menu_id' => 'header-menu',
                  // 'menu_class'     => 'navbar-nav'
                )
              );
            ?>
                    </div>
                    <div class="dropdown mt-3">
                   
                    
                </div>
                </div>        
            
          </div>
        </div>
      </div>
	

    </header>

