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
  <title>СварТехКом - надежный производитель металлоконструкций различного назначения</title>

  <!-- <meta name="robots" content="noindex"> -->


  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="css/styles.css"> -->
  <!-- <meta name="robots" content="noindex"> -->
  <?php wp_head(); ?>
  
</head>
<body>

  <div class="container-fluid fixed-container">

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
                        <div class="header-phones__bottom">
                            +7 777 7777777
                        </div>
                      </div>
                  
                      <div class="header-address">
                        <div class="header-address__top">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-address.png';?>" alt="Адрес">
                          <div>
                              Адрес:
                          </div>
                        </div>
                        <div class="header-address__bottom">
                            185001, Петрозаводск, <br> 
                            ул. Путейская, 5
                        </div>
                      </div>
                    
                      <div class="header-mail">
                        <div class="header-mail__top">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-mail.png';?>" alt="Почта">
                          <div>
                              Email:
                          </div>
                        </div>
                        <div class="header-mail__bottom">
                            svartechcom@gmail.com
                        </div>
          
                      </div>
                </div>

                <div class="header-hidden">

                </div>
        
                <div class="header-other">
                    <div class="header-search">
                      <input type="text" placeholder="Поиск">
                      <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-search.png';?>" alt="Поиск"></a>
                      
                    </div>
                    <div class="header-padding"></div>
                    <div class="header-vk">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/icon-vk.png';?>" alt="Вконтакте">
                    </div>
                    <div class="header-padding"></div>
                </div>
              
                
        
                
                
                
            </div> 

            
        
            
      </header>