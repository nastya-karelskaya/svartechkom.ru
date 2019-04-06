<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package svartechkom
 */

get_header();
?>

      <!-- section main -->
      <section class="section-first main ">
        <div class="container-fluid">
      
          <div class="content">
              <div class="main-title">
                <div class="row">
                  <div class="col-12">
                      <h1>
                          ООО "СварТехКом" 
                          <span class="main-title__part">Надежный производитель металлоконструкций                        </span>
                          <span class="main-title__part">различного назначения</span>
                      </h1>
                  </div>
                </div>
              </div>
              <div class="main-txt">
                <div class="row">
                  <div class="col-12 col-lg-8">
                    <div class="main-txt__title">
                        Изготавливаем металлоконструкции в Карелии с 2012 года. 
                    </div>
                    <div class="main-txt__descr">
                      За 6 лет специалисты ООО "СварТехКом" выполнили работы различного объема 
                        и сложности: от проектов по <a href="#">изготовлению и монтажу металлоконструкций для 
                            жилых домов</a>, до создания <a href="#">нестандартных 
                                металлоконструкций</a>.
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-8">
                      <div class="main-txt__block">
                          <div class="block-img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/img-left.jpeg';?>" alt="Работы ООО СварТехКом">
                          </div>
                          <div class="block-descr">
                              <div class="block-descr__title">
                                  Осуществляем полный комплекс мероприятий:
    
                              </div>
    
                              <ul class="block-descr__subtitle">
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Подготовка проектной документации</li>
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Изготовление изделия    
                                  </li>
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Покраска    
                                  </li>
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Доставка    
                                  </li>
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Монтаж конструкции   
                                  </li>
                                <li><img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/list-item.png';?>" alt="Пункт">
                                  Передача технадзору</li>
                              </ul>
                            
                          </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-4">
                      <div class="main-img">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/index/main/img-right.jpeg';?>" alt="Комплекс мероприятий">
                      </div>
                  </div>
                </div>
              </div>
          </div>
          

        </div>
      </section>
      <!-- ./ section main -->
      
      <!-- services -->
      <section class="section services">
        <div class="container-fluid">
          
          <div class="content">
            
            <div class="row">
              <div class="col-12">
                
                <div class="title services-title">
                  <h2>УСЛУГИ</h2>
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/index/services/services.png';?>" alt="Услуги">
                </div>
                
              </div>
            </div> 
            
            <!-- <div class="services-items">
              <div class="row">
                <div class="col-12">

                  <div class="services-items__big services-item">
                    <a href="aservice.html">
                        <h3 class="services-item__title">
                      
                            Изготовление <br>
                            металлоконструкций
                        </h3>
                    </a>
                    
                  </div>

                </div>
              </div>
              
              <div class="row">
                  
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ГИБКА МЕТАЛЛА <br>И ТРУБ</h3>
                      </a>
                      
                    </div>                    
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ГАЗОВАЯ РЕЗКА 
                              МЕТАЛА</h3>
                      </a>
                      
                    </div>
                  </div>  
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ХОЛОДНАЯ <br> 
                            КОВКА</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
              
                  
                <div class="col-12 col-md-6 col-lg-4"> 
                  <div class="services-items__small"> 
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ПОКРАСОЧНЫЕ 
                              РАБОТЫ</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4"> 
                  <div class="services-items__small">  
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">СТРОИТЕЛЬНЫЕ 
                              РАБОТЫ</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">  
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ДЕМОНТАЖ 
                              КОНСТРУКЦИЙ</h3>
                      </a>
                    </div>
                  </div>
                </div>

              </div>

            </div> -->
            <div class="services-items">
            


            <?php  
              $posts = get_posts( array(
                    'numberposts' => 10,
                    
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    //'meta_key'    => '',
                    //'meta_value'  =>'',
                    'post_type'   => 'allservices',
                    //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );
  
              
              $big_post = $posts[0];
              //echo $big_post;
              
              if($big_post) {
                $big_post_id = $big_post->ID;
                $big_post_link = get_the_permalink ( $big_post_id);

              ?>

              <div class="row">
                <div class="col-12">
  
                  <div class="services-items__big services-item">
                    <a href="<?php echo $big_post_link; ?>">
                        <h3 class="services-item__title">
                      
                            <?php echo $big_post->post_title; ?>
                        </h3>
                    </a>
                    
                  </div>
  
                </div>
              </div>


              <?php 

              }

                  
  
            ?>
                      
  
            <div class="row">
  
            <?php
            foreach( $posts as $post ){
              if($post != $big_post) {
                setup_postdata($post);
                    
                
                  
            ?>

  
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="<?php the_permalink(); ?>">
                          <h3 class="services-item__title"><?php the_title(); ?></h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
  
                <?php
                  }
                  }
  
                  wp_reset_postdata(); // сброс
  
                ?>
  
  
  
              </div>
            </div>
        
        </div>
      </section>
      <!-- ./services -->        
          
      <!-- objects -->
      <section class="section section-dark objects">
        <div class="container-fluid">
          
          <div class="content">
            
            <div class="row">
              <div class="col-12">
                
                <div class="title objects-title">
                  <h2>наши объекты</h2>
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/index/objects/objects.png';?>" alt="Наши объекты">
                </div>
                
               

                  <div class="slider-wrapper">

                    <div class="main-objects-slider">
                      

                      <?php
                        $posts = get_posts( array(
                          
                          'orderby'     => 'date',
                          'order'       => 'ASC',
                          //'meta_key'    => '',
                          //'meta_value'  =>'',
                          'post_type'   => 'objects',
                          //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach($posts as $post) {
                         
                            setup_postdata($post);

                      ?>

                      <div class="objects-wrapper">
                        <div class="objects-slider__item" style="width: 350px;">
                          <div class="slider-item__title"> <?php the_title(); ?>

                          </div>
                          <div class="button button-c slider-item__button">
                            <a href="<?php the_permalink(); ?>">посмотреть</a>
                            
                            <div class="img-tool gray"></div>
                          </div>
                        </div>
                      </div>
                    
                   

                    <?php  
                      }
      
                      wp_reset_postdata(); // сброс
                    ?>

                   
                    </div>



                  </div>

            

              </div> 
            </div>

          <!-- ./content -->
          </div>
        
        </div>
      </section>
      <!-- ./objects -->

      <!-- reasons -->
      <section class="section reasons">
        <div class="container-fluid">
          
          <div class="content">
            
              <div class="row">
                <div class="col-12">
                
                  <div class="title reasons-title">
                    <h2>5 причин обратиться к нам</h2>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons.png';?>" alt="Наши объекты">
                  </div>

                </div>
              </div>
                
              
                  <div class="reasons-rowone">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="reasons-rowone__item">
                          <div class="item__img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons-item.png';?>" alt="6 лет опыта">
                          </div>
                          <div class="item__title">6 лет опыта</div>
                        </div>
                      </div>
              

                  
                      <div class="col-12 col-md-6">

                        <div class="reasons-rowone__item">
                          <div class="item__img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons-item.png';?>" alt="Свое 
                            профоборудование">
                          </div>
                          <div class="item__title">Свое 
                            профоборудование</div>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="reasons-rowtwo">
                    <div class="row">
                      <div class="col-12">
                        <div class="reasons-rowtwo__item">
                          <div class="item__img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons-item.png';?>" alt="9 из 10 проектов сдаем 
                            без замечаний">
                          </div>
                          <div class="item__title">9 из 10 проектов сдаем 
                            без замечаний</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="reasons-rowthree">
                    <div class="row">
                      <div class="col-12 col-md-6">
                          <div class="reasons-rowthree__item">
                              <div class="item__img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons-item.png';?>" alt="Сертификаты НАКС">
                              </div>
                              <div class="item__title">Специалисты высокой 
                                квалификации <br>
                                Сертификаты НАКС</div>
                            </div>
                      </div>
                      <div class="col-12 col-md-6">
                          <div class="reasons-rowthree__item">
                              <div class="item__img">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reasons/reasons-item.png'?>" alt="Сопровождение проекта 
                                руководством 
                                на каждом этапе">
                              </div>
                              <div class="item__title">Сопровождение проекта 
                                руководством 
                                на каждом этапе</div>
                            </div>
                      </div>
                    </div>
                    
                    
                  </div>

              
              
            
          </div>
          
        </div>
      </section>
      <!-- ./reasons -->

      <!-- reviews -->
      <section class="section section-dark reviews">
        <div class="container-fluid">
          
          <div class="content">
              <div class="row">
                <div class="col-12">
                  
                  <div class="title reviews-title">
                    <h2>отзывы</h2>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reviews/reviews.png';?>" alt="Наши объекты">
                  </div>
                
                  <!-- <div id="carouselReviews" class="carousel slide reviews-slider"> -->

                  <div class="slider-wrapper">

                    <div class="main-reviews-slider">


                      <!-- <div class="carousel-inner "> -->

                        <?php
                          $reviews_posts = get_posts( array(
                            
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            //'meta_key'    => '',
                            //'meta_value'  =>'',
                            'post_type'   => 'allreviews',
                            //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                          ) );
          
                          foreach( $reviews_posts as $post ) {
                          
                              setup_postdata($post);


                        ?>
      
                            
                              <div class="reviews-item__wrapper">
                                <div class="reviews-slider__item">
                                  <div class="slider-item__title"> 
                                    <div class="title-img">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/quote.png';?>" alt="quote">
                                    </div>
                                    <div class="title-txt"><?php the_title(); ?></div> 
                                  </div>
                                  <div class="slider-item__descr">
                                    <div class="descr-img"></div>
                                    <div class="descr-txt">Текст отзыва</div>
                                  </div>
                                  <div class="button button-c  slider-item__button">
                                      <a href="<?php the_permalink(); ?>">посмотреть</a>
                                    <div class="img-tool gray"></div>
                                  </div>
                                </div>
                              </div>
                                         

                        <?php
                          
                          }
          
                          wp_reset_postdata(); // сброс
          
                        ?>
                     
                    


                      <!-- <a class="carousel-control-prev reviews-slider__left arrow" href="#carouselReviews" role="button" data-slide="prev">
                        <img src="<?php //echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" alt="лево">
                      </a>
                      <a class="carousel-control-next reviews-slider__right arrow" href="#carouselReviews" role="button" data-slide="next">
                        <img src="<?php //echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" alt="право">
                      </a> -->

                    </div>

                  </div>

                </div>
                
              </div> 
            
          </div>
      
        </div>
      </section>
      <!-- ./reviews -->

      <!-- order -->
      <section class="section order">
        <div class="container-fluid">
          
          <div class="content">
            <div class="row">
              <div class="col-12">
                
                <div class="title order-title">
                  <h2>заказать</h2>
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/index/order/order.png';?>" alt="Наши объекты">
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-7 col-xl-8">     
                <div class="order-subtitle">
                    Есть вопросы? Напишите нам!
                </div>
                <div class="order-form-wrapper">
                  <div class="form">
                    <!-- <form action="">
                      <fieldset>
                        <div class="form-name">
                            <label for="name">Ваше имя:</label>
                            <input type="text" name="name" placeholder="Имя">
                        </div>
                        
                        <div class="form-phone">
                            <label for="phone">Ваш телефон:</label>
                            <input type="text" name="phone" placeholder="Телефон">
                        </div>
                        
                      </fieldset>
                      
                      <fieldset class="textarea">
                        <div class="form-txt">
                            <label for="txt">Сообщение:</label>
                            <textarea name="txt" id="" cols="30"  placeholder="Сообщение"></textarea>
                        </div>
                        
                      </fieldset>
                      

                      <div class="button button-w form-button">
                        <button type="button">заказать</button>
                        <div class="img-tool blue"></div>
                      </div>
                    </form> -->
                    <?php echo do_shortcode('[contact-form-7 id="150" title="main_form"]');?>
                  </div>

                  
                  
                </div>
                
              </div> 
              <div class="col-12 col-lg-5 col-xl-4">
                <div class="form-photo">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/index/order/order-photo.jpeg';?>" alt="ООО СварТехКом">
                </div>
              </div>
            </div>
          </div>
        
            
        </div>
      </section>
      <!-- ./order -->
  
  
    

<?php
// get_sidebar();
get_footer();
?>