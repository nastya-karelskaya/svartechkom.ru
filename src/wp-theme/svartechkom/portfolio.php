
<?php
/*
Template Name: Наши объекты
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>
       
   <!-- objects -->
   <section class="section section-first objects objects-main">
      <div class="container-fluid">
        <!-- content -->
        <div class="content">
          
          <div class="row">
            <div class="col-12">
              <!-- title -->
              <div class="title objects-title">
                <h1>наши объекты</h1>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/index/objects/objects.png';?>" alt="Наши объекты">
              </div>
              <!-- ./title -->

            </div>
          </div>

          <div class="row">
            <div class="col-12">

              <div class="objects-descr">
                  В данном разделе представлены проекты, выполненные нашей компанией в период с 2012 года и по сегодняшний день. 
              </div>

            </div>
          </div>

          <!-- grid -->
          <div class="objects-grid">
            <div class="row">
             

          <?php
            global $wp_query;

            $wp_query = new WP_Query(array(
              'post_type' => 'objects',
              'posts_per_page' => '6',
              'paged' => get_query_var('paged') ?: 1 // страница пагинации
            ));

            while( have_posts() ){
              the_post();

          ?>
            <div class="col-12 col-lg-6 col-xl-4">

              <div class="objects-grid__item "  style="background:url(<?php echo get_field('object_photo', get_the_ID()); ?>) center no-repeat">
                <h2 class="grid-item__title">
                <?php the_title(); ?>
                </h2>
                <div class="button button-c grid-item__button">
                    <a href="<?php the_permalink(); ?>">посмотреть</a>
                    <div class="img-tool gray"></div>
                </div>
              </div>

            </div>

          <?php  
            }

          ?>

            </div>
          </div>
          <!--./grid -->

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
    <!-- ./objects -->

<?php 
get_footer(); 
?>