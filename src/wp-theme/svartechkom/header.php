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
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

  
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
      
      <!-- <div class="menu-desktop">
        <div class="menu-desktop-item">
            <div class="menu-desktop-item__icon">
              <img src="images/index/main/menu-services.png" alt="Услуги">
            </div>
            <div class="menu-desktop-item__txt">
              <a href="services.html">Услуги</a>
            </div>
        </div>
        <div class="menu-desktop-item">
          <div class="menu-desktop-item__icon">
            <img src="images/index/main/menu-objects.png" alt="Наши объекты">
          </div>
          <div class="menu-desktop-item__txt">
            <a href="objects.html">Наши <span>объекты</span></a> 
          </div>
        </div>
        <div class="menu-desktop-item">
          <div class="menu-desktop-item__icon"><img src="images/index/main/menu-company.png" alt=" О компании">
          </div>
          <div class="menu-desktop-item__txt">
            <a href="about.html">О компании</a> 
          </div>
        </div>
        <div class="menu-desktop-item">
          <div class="menu-desktop-item__icon"><img src="images/index/main/menu-reviews.png" alt="Отзывы">
          </div>
          <div class="menu-desktop-item__txt">
          <a href="reviews.html">Отзывы</a>  
          </div>
        </div>
        <div class="menu-desktop-item">
          <div class="menu-desktop-item__icon"><img src="images/index/main/menu-contacts.png" alt="Контакты">
          </div>
          <div class="menu-desktop-item__txt">
            <a href="contacts.html">Контакты</a>
            
          </div>
        </div>
      </div> -->
  </div>
</div> 

  <div class="container-fluid fixed-container page-container">

    <div class="page">

      <header class="fixed-header">
        
            <div class="header">
               
                <nav class="navbar menu-mobile">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="<?php home_url()?>">Logo</a>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="services.html">Услуги</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="objects.html">Наши <span>объекты</span></a>
                       
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">О компании</a>
                        
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="reviews.html">Отзывы</a>
                        
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="contacts.html">Контакты</a>
                        
                      </li>
                      
                      
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                  </div>
                </nav>

                
        
                <div class="header-logo">
                  <a href="index.html">logo</a>
                </div>
        
                <div class="header-contacts">
                    <div class="header-phones">
                        <div class="header-phones__top">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-phones.png';?>" alt="Телефоны">
                          <div>
                              Телефон:
                          </div>
                        </div>
                        <a href="tel:+77777777777" class="header-phones__bottom">
                            +7 777 7777777
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
                        <a href="mailto:svartechcom@gmail.com" class="header-mail__bottom">
                            svartechcom@gmail.com
                        </a>
          
                      </div>
                </div>

                <div class="header-hidden">

                </div>
        
                <div class="header-other">
                    <div class="header-search">

                    <?php get_search_form(); ?>
                      <!-- <input type="text" placeholder="Поиск">
                       
                      <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-search.png';?>" alt="Поиск"></a> -->
                      
                    </div>
                    <div class="header-padding"></div>
                    <div class="header-vk">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-vk.png';?>" alt="Вконтакте">
                    </div>
                    <div class="header-padding"></div>
                </div>
              
                
        
                
                
                
            </div> 

            
        
            
      </header>