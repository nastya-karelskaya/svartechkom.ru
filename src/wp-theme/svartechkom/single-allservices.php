<?php
/*

*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>


  <!-- section aservice-main -->
  <section class="section section-first section-dark aservice-main ">
    <div class="container-fluid">
  
      <div class="content">
          
        <div class="row">
          <div class="col-12">
            <div class="aservice-path">
              <a href="<?php echo get_site_url();?>">Главная</a> / <a href="<?php echo get_site_url() . '/allservices'  ?>">Услуги</a> / <span><?php the_title(); ?></span> 
            </div>
            <div class="title aservice-main-title">
              <h1>
                <?php the_title();
                ?>  
              </h1>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice.png';?>" alt="<?php the_title(); ?>">
            </div>
          </div>
        </div>

        <div class="aservice-main__wrapper">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="aservice-main__left">
                <div class="main-left__txt">   
                  <?php the_field("descr_base"); ?>
                </div>
                <ul class="main-left__list">
                  <?php 
                    $list_item_1 = get_field('list-item-1'); 
                    if($list_item_1) { 
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_1; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                  <?php 
                    $list_item_2 = get_field('list-item-2'); 
                    if($list_item_2) {
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_2; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                    <?php 
                    $list_item_3 = get_field('list-item-3'); 
                    if($list_item_3) {
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_3; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                    <?php 
                    $list_item_4 = get_field('list-item-4'); 
                    if($list_item_4) {
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_4; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                    <?php 
                    $list_item_5 = get_field('list-item-5'); 
                    if($list_item_5) {
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_5; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                    <?php 
                    $list_item_6 = get_field('list-item-6'); 
                    if($list_item_6) {
                  ?>
                  <li>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                    <div>
                      <?php echo $list_item_6; ?>
                    </div>
                  </li>
                  <?php 
                    }
                    ?>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="aservice-main__right">
                <div class="main-right__txt">
                  <?php the_field("right-descr-1"); ?>
                </div>
                <div class="main-right__txt">
                  <?php the_field("right-descr-2"); ?>
                </div>    
              </div>
            </div>
          </div> 
        </div>
              
      </div>
      <!-- ./content -->

    </div>
  </section>
  <!-- ./ section aservice-main -->

      
  <!-- aservice-objects -->
  <section class="section aservice-objects">
    <div class="container-fluid">
      <!-- content -->
      <div class="content">
        
        <div class="row">
          <div class="col-12">
            <!-- title -->
            <div class="title aservice-objects-title">
              <h2>Примеры проектов</h2>
            </div>
            <!-- ./title -->
          </div>
        </div>

        <div class="aservice-objects-slider__wrapper">
          
          <div class="aservice-objects-slider">

            <?php  
              $example_posts = array();
              $example_posts_keys = array();

              $example_posts_keys['example-1'] = get_field("example-1");
              $example_posts_keys['example-2'] = get_field("example-2");
              $example_posts_keys['example-3'] = get_field("example-3");

              foreach($example_posts_keys as $key => $value) {
                if($value) {

                  $example_post = get_post($value);
                  $example_post_excerpt = get_field('descr-short', get_field($value));
        
            ?>
              
            
            <div class="aservice-item__wrapper">
              <div class="aservice-objects-slider__item ">
                <div class="slider-item__photo">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="Фото объекта">                      
                </div>
                <div class="slider-item__txt">
                  <h3 class="slider-item__title"> 
                  <?php echo $example_post->post_title; ?> 
                </h3>
                  <div class="slider-item__descr"> 
                  <?php echo $example_post_excerpt; ?> 
                  </div>
                  <div class="button button-c slider-item__button">
                    <a href="<?php echo get_the_permalink( $example_post);?>">посмотреть</a>
                    <div class="img-tool gray" ></div>
                  </div>
                </div>
              </div>
            </div>

            <?php 
             }
            }
            ?>

            
          </div>

        </div>
        
      </div>
      <!-- ./content -->
    </div>
  </section>
  <!-- ./objects -->


  <!-- order -->
  <section class="section section-dark aservice-order">
    <div class="container-fluid">

      <!-- content -->
      <div class="content">
        
        <div class="row">
          <div class="col-12">
            <!-- title -->
            <div class="title aservice-order-title">
              <h2>заказать</h2>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-order.png';?>" alt="Наши объекты">
            </div>
            <!-- ./title -->
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-7 col-xl-8">   
            <div class="aservice-order-subtitle">
                Есть вопросы? Напишите нам!
            </div>
            <div class="aservice-order-form-wrapper">
              <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="152" title="service_form"]');?> 
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
      <!-- ./content -->
        
    </div>
  </section>
  <!-- ./order -->



<?php
// get_sidebar();
get_footer();
?>