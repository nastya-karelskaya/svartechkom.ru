
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
              global $wp_query;

              $wp_query = new WP_Query(array(
                'post_type' => 'allreviews',
                'posts_per_page' => '4',
                'paged' => get_query_var('paged') ?: 1 // страница пагинации
              ));

              while( have_posts() ){
                the_post();

                $review_post_id = get_the_ID();

            ?>

            <div class="col-12 col-xl-6">
              <div class="reviews-main-grid__item ">
                <div class="grid-item__top">
                    <div class="item-top__img">
                      <img src="<?php echo get_field('review_logo', $review_post_id); ?>" alt="Логотип компании">
                    </div>

                    <div class="item-top__txt">
                      <h3 class="item-top__title"> 
                        <?php echo get_field('review_company_name', $review_post_id); ?>
                      </h3>
  
                      <h4 class="item-top__subtitle">
                        <?php echo get_field('review_author', $review_post_id); ?>
                      </h4>
                    </div>

                </div>
                <div class="grid-item__bottom">
                  <?php echo substr( get_field('review_text', $review_post_id), 0, 190 ) . ' ...'; ?>
                </div>

                <div class="grid-item__button">
                  <div class="button button-o">
                    <a href="<?php the_permalink(); ?>">посмотреть</a>
                    <div class="img-tool gray"></div>
                  </div>
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




          
      </div>
      <!-- ./content -->
    </div>
  </section>
  <!-- ./reviews -->


<?php 
get_footer(); 
?>