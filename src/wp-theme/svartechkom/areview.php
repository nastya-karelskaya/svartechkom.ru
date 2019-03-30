<?php
/*
Template Name: Отзыв
Template Post Type: allreviews
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

        

     
        <div class="reviews-main-grid">

          <div class="row">

            <div class="col-12 ">
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

          </div>

        </div>

    
          
      </div>
      <!-- ./content -->
    </div>
  </section>
  <!-- ./reviews -->
  



<?php
// get_sidebar();
get_footer();
?>