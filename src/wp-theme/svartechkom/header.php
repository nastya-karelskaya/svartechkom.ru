<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package svartechkom
 */

?>

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>

  <!-- <meta name="robots" content="noindex"> -->


  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="css/styles.css"> -->
  <!-- <meta name="robots" content="noindex"> -->
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  
</head>
<body>

<div class="container-fluid fixed-container">
  <div class="fixed-menu">
    <?php wp_nav_menu( [
    'theme_location'  => 'bottom',
    'menu'            => '', 
    'container'       => null, 
    // 'container_class' => '', 
    // 'container_id'    => '',
    'menu_class'      => 'menu-desktop', 
    'menu_id'         => 'menu-desktop',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '<div class="menu-item__icon"><div class="img"></div></div><div class="menu-item__txt">',
    'after'           => '</div>',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => '',
  ] );?>
      
      
  </div>
</div> 

  <div class="container-fluid fixed-container page-container">

    <div class="page">

      <header class="fixed-header">
        
        <div class="header">
          <div class="header-burger">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/menu.png';?>" alt="Меню">
          </div>

          <div class="header-logo">
            
              
              <?php the_custom_logo(); ?>
            
          </div>

          <div class="header-center">
            <div class="row">
              <div class="col-12 col-sm-5 col-md-4 col-lg-6 col-xl-8 pl-0 pr-0">
                <div class="header-contacts">
                  <div class="header-phones">
                    <div class="header-phones__top">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-phones.png';?>" alt="Телефоны">
                      <div>
                          Телефон:
                      </div>
                    </div>
                    <a href="tel:89114296634" class="header-phones__bottom">
                      8 911 429 66 34
                    </a>
                  </div>
                
                  <div class="header-address">
                    <div class="header-address__top">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-address.png';?>" alt="Адрес">
                      <div>
                          Адрес:
                      </div>
                    </div>
                    <a href="<?php echo home_url() . '/contacts' ?>" class="header-address__bottom">
                        185001, Петрозаводск, <br> 
                        ул. Путейская, 5
                    </a>
                  </div>
                
                  <div class="header-mail">
                    <div class="header-mail__top">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-mail.png';?>" alt="Почта">
                      <div>
                          Email:
                      </div>
                    </div>
                    <a href="mailto:svartechcom@mail.ru" class="header-mail__bottom">
                        svartechcom@mail.ru
                    </a>
      
                  </div>
                </div>
              </div>
              <div class="col-3 d-none d-sm-block col-sm-7 col-md-8 col-lg-6 col-xl-4 pr-0 pr-md-auto">
                <div class="header-other">
                  <div class="header-search">
                    <?php get_search_form(); ?>
                  </div>
                
                  <div class="header-vk">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-vk.png';?>" alt="Вконтакте">
                  </div>
                </div>
              </div>
            </div>
            

            
          </div> 
                            
        </div> 
          
      </header>