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
              <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice.png';?>" alt="">
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
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-1"); ?></div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-2"); ?></div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-3"); ?></div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-4"); ?></div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-5"); ?></div>  
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div><?php the_field("list-item-6"); ?></div>  
                          </li>
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

        <div id="carouselObjects" class="carousel slide aservice-objects-slider">

            <div class="aservice-slider-wrapper">


              <div class="carousel-inner ">
                <div class="carousel-item active">

                <?php  

              
                  $example_post_1 = get_post(get_field("example-1"));
                  $example_post_2 = get_post(get_field("example-2"));
                  $example_post_3 = get_post(get_field("example-3"));

                  $example_post_1_excerpt = get_field('descr-short', get_field("example-1"));
                  $example_post_2_excerpt = get_field('descr-short', get_field("example-2"));
                  $example_post_3_excerpt = get_field('descr-short', get_field("example-3"));
          
              ?>
                  
                    
                  <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="aservice-objects-slider__item ">
                          <div class="slider-item__photo">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="">                      
                          </div>
                          <div class="slider-item__txt">
                            <div class="slider-item__title"> 
                            <?php echo $example_post_1->post_title; ?> 
                            </div>
                            <div class="slider-item__descr"> 
                            <?php echo $example_post_1_excerpt; ?> 
                            </div>
                            <div class="button button-c slider-item__button">
                              <a href="<?php echo get_the_permalink( get_field("example-1") );?>">посмотреть</a>
                              <div class="img-tool gray" ></div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  

                </div>

                <div class="carousel-item ">
                  
                  <div class="row">
                    <div class="col-12 col-xl-6">
                      <div class="aservice-objects-slider__item ">
                        <div class="slider-item__photo">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="">                      
                        </div>
                        <div class="slider-item__txt">
                          <div class="slider-item__title"> 
                            <?php echo $example_post_2->post_title; ?>
                          </div>
                          <div class="slider-item__descr"> 
                            <?php echo $example_post_2_excerpt; ?>
                          </div>
                          <div class="button button-c slider-item__button">
                            <a href="<?php echo get_the_permalink( get_field("example-2") );?>">посмотреть</a>
                            <div class="img-tool gray" ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="carousel-item ">
                  <div class="row">
                    <div class="col-12 col-xl-6">
                      <div class="aservice-objects-slider__item ">
                        <div class="slider-item__photo">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="">                      
                        </div>
                        <div class="slider-item__txt">
                            <div class="slider-item__title"> 
                              <?php echo $example_post_3->post_title; ?>
                            </div>
                            <div class="slider-item__descr"> 
                              <?php echo $example_post_3_excerpt; ?>
                            </div>
                            <div class="button button-c slider-item__button">
                              <a href="<?php echo get_the_permalink( get_field("example-3") );?>">посмотреть</a>
                              <div class="img-tool gray" ></div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                </div>

               
              </div>


              <a class="carousel-control-prev aservice-objects-slider__left arrow" href="#carouselObjects" role="button" data-slide="prev">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" alt="лево">
              </a>
              <a class="carousel-control-next aservice-objects-slider__right arrow" href="#carouselObjects" role="button" data-slide="next">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" alt="право">
              </a>

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
                <form action="">
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
                  
                  <fieldset>
                    <div class="form-txt">
                        <label for="txt">Сообщение:</label>
                        <textarea name="txt" id="" cols="30"  placeholder="Сообщение"></textarea>
                    </div>
                    
                  </fieldset>
                  

                  <div class="button button-c form-button">
                    <button type="button">посмотреть</button>
                    <div class="img-tool blue"></div>
                  </div>
                </form>
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