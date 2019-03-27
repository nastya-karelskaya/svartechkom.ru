
<?php
/*
Template Name: Отзывы
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
  <!-- reviews -->
  <section class="section section-first reviews-main">
    <div class="container-fluid">
      <!-- content -->
      <div class="content">
        
        <div class="row">
          <div class="col-12">
            <!-- title -->
            <div class="title reviews-main-title">
              <h2>Отзывы</h2>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/index/reviews/reviews.png';?>" alt="Наши объекты">
            </div>
            <!-- ./title -->

          </div>
        </div>

        <div class="row">
          <div class="col-12">

            <div class="reviews-main-descr">
                Качество нашей работы подтвердено отзывами заказчиков.
            </div>
          </div>
        </div>

        <!-- grid -->
        <div class="reviews-main-grid">

          <div class="row">

            <?php  
              // $posts = get_posts( array(
              //       'numberposts' => 6,
                    
              //       'orderby'     => 'date',
              //       'order'       => 'ASC',
              //       //'meta_key'    => '',
              //       //'meta_value'  =>'',
              //       'post_type'   => 'reviews',
              //       //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              //     ) );


              // foreach( $posts as $post ) {
                
              //     setup_postdata($post);
                      
            ?>

            <!-- <div class="col-12 col-xl-6">
              <div class="reviews-main-grid__item ">
                <div class="grid-item__top">
                    <div class="item-top__img">
                      <img src="<?php //echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="">
                    </div>

                    <div class="item-top__txt">
                      <div class="item-top__title"> 
                        <?php //the_title(); ?>
                      </div>
  
                      <div class="item-top__subtitle">
                        Руководитель
                      </div>
                    </div>

                </div>
                <div class="grid-item__bottom">
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва  
                </div>
                
              
              </div>
            </div> -->

            <!-- <div class="col-12 col-xl-6">
                <div class="reviews-main-grid__item ">
                    <div class="grid-item__top">
                        <div class="item-top__img">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="">
                        </div>

                        <div class="item-top__txt">
                          <div class="item-top__title"> 
                            Название компании
                          </div>
      
                          <div class="item-top__subtitle">
                            Руководитель
                          </div>
                        </div>

                    </div>
                    <div class="grid-item__bottom">
                        текст отзыва текст отзыва текст отзыва текст отзыва 
                        текст отзыва текст отзыва текст отзыва текст отзыва 
                        текст отзыва текст отзыва текст отзыва текст отзыва 
                        текст отзыва  
                    </div>
                  </div>
            </div>

            <div class="col-12 col-xl-6">
              <div class="reviews-main-grid__item ">
                <div class="grid-item__top">
                    <div class="item-top__img">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="">
                    </div>

                    <div class="item-top__txt">
                      <div class="item-top__title"> 
                        Название компании
                      </div>
  
                      <div class="item-top__subtitle">
                        Руководитель
                      </div>
                    </div>

                </div>
                <div class="grid-item__bottom">
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва 
                    
                </div>
                
              
              </div>
            </div>

            <div class="col-12 col-xl-6">
              <div class="reviews-main-grid__item ">
                <div class="grid-item__top">
                    <div class="item-top__img">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="">
                    </div>

                    <div class="item-top__txt">
                      <div class="item-top__title"> 
                        Название компании
                      </div>
  
                      <div class="item-top__subtitle">
                        Руководитель
                      </div>
                    </div>

                </div>
                <div class="grid-item__bottom">
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва  
                </div>
                  
                
              </div>
            </div> -->

            <?php
                
              //}

              //wp_reset_postdata(); // сброс

            ?>

            <?php
              global $wp_query;

              $wp_query = new WP_Query(array(
                'post_type' => 'allreviews',
                'posts_per_page' => '4',
                'paged' => get_query_var('paged') ?: 1 // страница пагинации
              ));

              while( have_posts() ){
                the_post();

            ?>

            <div class="col-12 col-xl-6">
              <div class="reviews-main-grid__item ">
                <div class="grid-item__top">
                    <div class="item-top__img">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="">
                    </div>

                    <div class="item-top__txt">
                      <div class="item-top__title"> 
                        <?php the_title(); ?>
                      </div>
  
                      <div class="item-top__subtitle">
                        Руководитель
                      </div>
                    </div>

                </div>
                <div class="grid-item__bottom">
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва текст отзыва текст отзыва текст отзыва 
                    текст отзыва  
                </div>
                
              
              </div>
            </div>



            <?php  
              }

            ?>


            
          </div>

        </div>
        <!-- ./grid -->


         <!-- objects-paginator -->
        <div class="objects-paginator paginator ">

          <?php       

            //posts_nav_link(); // пагинация - echo тут не надо
            posts_nav_link( 
              ' ', 
              '<img src="' . get_stylesheet_directory_uri() . '/assets/images/objects/arrow-left.png" />', 
              '<img src="' . get_stylesheet_directory_uri() . '/assets/images/objects/arrow-right.png" />' 
            ); 

            wp_reset_query(); // сброс $wp_query
          ?>

    </div>





            
        <!-- reviews-paginator -->
        <!-- <div class="reviews-main-paginator paginator current">
          <div class="paginator-left__wrapper">
              <a  href="#" class="paginator-left__digit">
                <img src="<?php //echo get_template_directory_uri() . '/assets/images/objects/arrow-left.png';?>" alt="Назад">
              </a>
          </div>
          <div class="paginator-center__wrapper">
              <a  href="#" class="paginator-center__digit current">
                1
              </a>
              <a href="#" class="paginator-center__digit">
                2 
              </a>
          </div>
          <div class="paginator-right__wrapper">
              <a  href="#" class="paginator-right__digit">
                <img src="<?php //echo get_template_directory_uri() . '/assets/images/objects/arrow-right.png';?>" alt="Вперед"> 
              </a>
          </div>
        </div> -->
        <!-- ./reviews-paginator -->
          
      </div>
      <!-- ./content -->
    </div>
  </section>
  <!-- ./reviews -->


<?php 
get_footer(); 
?>