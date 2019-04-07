<?php
/*

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
              <h2>Отзыв от «‎<?php echo get_field( 'review_company_name', get_the_ID() ); ?>» </h2>
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
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/reviews/reviews-item.png';?>" alt="Логотип компании">
                    </div>

                    

                    <div class="item-top__txt">
                      <h3 class="item-top__title"> 
                        <?php echo get_field( 'review_company_name', get_the_ID() ); ?>
                      </h3>
  
                      <h4 class="item-top__subtitle">
                        <?php echo get_field( 'review_author', get_the_ID() ); ?>
                      </h4>
                    </div>

                </div>
                <div class="grid-item__bottom">
                  <?php echo get_field( 'review_text', get_the_ID() ); ?>
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