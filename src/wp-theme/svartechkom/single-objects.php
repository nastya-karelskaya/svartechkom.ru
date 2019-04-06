<?php

?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>


    <!-- section main -->
    <section class="section-dark section-first anobject ">
      <div class="container-fluid">
   
        <div class="content">

          <div class="row">
            <div class="col-12">
                

              <div class="anobject__path">
                  <a href="<?php echo get_site_url();?>">Главная</a> / <a href="<?php echo get_site_url() . '/portfolio'  ?>">Наши объекты</a> / <span><?php the_title(); ?></span> 
              </div>
              <div class="anobject__title">
                <h1>
                    <?php the_title(); ?>
                </h1>
              </div>

              <div class="anobject__subtitle">
                  <?php the_field("subtitle"); ?>
              </div>
            </div>
          </div>

          <div class="anobject__wrapper">
            <div class="row">
              <div class="col-12 col-xl-6">
                <div class="anobject__photo">
                  <img src="<?php the_field("object_photo"); ?>" alt="">
                </div>

              </div>
              <div class="col-12 col-xl-6">
                  <div class="anobject__descr">
                      <div class="descr-txt">
                        <?php the_field("descr_big"); ?>
                      </div>
                      <div class="descr-lists">
                        <ul>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_1"); ?>   
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_2"); ?>                   
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_3"); ?>        
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_4"); ?>
                            </div>
                          </li>
                        </ul>
    
                        <ul>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_5"); ?>
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_6"); ?>
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_7"); ?>
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              <?php the_field("descr_services_8"); ?>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="descr-volume">
                        <span>Объем работ</span>:
                        <?php the_field("descr_volume"); ?>
                      </div>
                      <div class="descr-time">
                        <span>Срок работ</span>:
                        <?php the_field("descr_time"); ?>
                      </div>
                      <div class="descr-year">
                        <span>Год</span>:
                        <?php the_field("descr_year"); ?>
                      </div>
                      <div class="descr-review">
                        <span>Отзыв заказчика</span>: <a href="<?php the_field("descr_customer"); ?>">Посмотреть</a>
                      </div>
                  </div>
              </div>
            </div>
            
          </div>
           
        </div>
        <!-- ./content -->

      </div>
    </section>
    <!-- ./ section main -->

            
    <!-- anobject-stages -->
    <section class="section anobject-stages">
      <div class="container-fluid">
        <!-- content -->
        <div class="content">
         
          <div class="row">
            <div class="col-12">
              <!-- title -->
              <div class="title anobject-stages__title">
                <h2>Этапы работы</h2>
                
              </div>
              <!-- ./title -->
            </div>
          </div>

          <!-- stages -->
          <div class="anobject-stages__first">
              <div class="row">
                  <div class="col-12 col-xl-6">
                      <div class="stages-item__left">
                          <div class="stages-item__digit">
                            1
                          </div>
                          <div class="stages-item__txt">
                              <div class="stages-item__title"><?php the_field("stage_1_title"); ?></div>
                              <div class="stages-item__descr"><?php the_field("stage_1_subtitle"); ?></div>
                          </div>
                          
                        </div>
                  </div>
                  <div class="col-12 col-xl-6">
                      <div class="stages-item__right">

                      
                          <div class="stages-item__slider">
                            <div class="slider-item current">
                              <img src="<?php the_field("stage_1_photo_2"); ?>" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="<?php the_field("stage_1_photo_3"); ?>" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="<?php the_field("stage_1_photo_4"); ?>" alt="">
                            </div>
                          </div>
                          <div class="stages-item__photo" data-toggle="modal" data-target="#photoModal1">
                              <img src="<?php the_field("stage_1_photo_big"); ?>" alt="">
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="photoModal1" tabindex="-1" role="dialog" aria-labelledby="photoModal1Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-photo">
                                    <div id="photoModal1Indicators" class="carousel slide" data-ride="carousel">
                                      <!-- <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                          
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                          
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                          
                                        </li>
                                      </ol> -->

                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <div class="img-wrapper">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                          </div>
                                          
                                        </div>
                                        <div class="carousel-item">
                                          <div class="img-wrapper">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <div class="img-wrapper">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                          </div>
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#photoModal1Indicators" role="button" data-slide="prev">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" class="arrow-left" alt="лево">
                                      </a>
                                      <a class="carousel-control-next" href="#photoModal1Indicators" role="button" data-slide="next">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" class="arrow-right" alt="право">
                                      </a>
                                    </div>
                                    
                                  </div>

                                  
                                    
                                  
                                    
                                  
                                </div>
                                
                              </div>
                            </div>
                          </div>
        
                        </div>
                  </div>
                </div>
          </div>

          <div class="anobject-stages__second">

            <div class="row">
              <div class="col-12 col-xl-6 ">
                  <div class="stages-item__right">
                      <div class="stages-item__slider">
                        <div class="slider-item current">
                          <img src="<?php the_field("stage_2_photo_2"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_2_photo_3"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_2_photo_4"); ?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo" data-toggle="modal" data-target="#photoModal2">
                          <img src="<?php the_field("stage_2_photo_big"); ?>" alt="">
                      </div>

                       <!-- Modal -->
                        <div class="modal fade" id="photoModal2" tabindex="-1" role="dialog" aria-labelledby="photoModal2Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="modal-photo">
                                  <div id="photoModal2Indicators" class="carousel slide" data-ride="carousel">
                                    <!-- <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                        
                                      </li>
                                    </ol> -->

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#photoModal2Indicators" role="button" data-slide="prev">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" class="arrow-left" alt="лево">
                                    </a>
                                    <a class="carousel-control-next" href="#photoModal2Indicators" role="button" data-slide="next">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" class="arrow-right" alt="право">
                                    </a>
                                  </div>
                                  
                                </div>

                                
                                  
                                
                                  
                                
                              </div>
                              
                            </div>
                          </div>
                        </div>
          
      
                      </div>
                </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__left">
                      <div class="stages-item__digit">
                        2
                      </div>
                      <div class="stages-item__txt">
                          <div class="stages-item__title"><?php the_field("stage_2_title"); ?></div>
                          <div class="stages-item__descr"><?php the_field("stage_2_subtitle"); ?></div>
                      </div>
                      
                    </div>
              </div>
            </div>

          </div>


          <div class="anobject-stages__third">
            <div class="row">
              <div class="col-12 col-xl-6">
                  <div class="stages-item__left">
                      <div class="stages-item__digit">
                        3
                      </div>
                      <div class="stages-item__txt">
                          <div class="stages-item__title"><?php the_field("stage_3_title"); ?></div>
                          <div class="stages-item__descr"><?php the_field("stage_3_subtitle"); ?></div>
                      </div>
                      
                    </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__right">
                      <div class="stages-item__slider">
                        <div class="slider-item current">
                          <img src="<?php the_field("stage_3_photo_2"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_3_photo_3"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_3_photo_4"); ?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo" data-toggle="modal" data-target="#photoModal3">
                          <img src="<?php the_field("stage_3_photo_big"); ?>" alt="">
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="photoModal3" tabindex="-1" role="dialog" aria-labelledby="photoModal2Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="modal-photo">
                                  <div id="photoModal3Indicators" class="carousel slide" data-ride="carousel">
                                    <!-- <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                       
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                        
                                      </li>
                                    </ol> -->

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#photoModal3Indicators" role="button" data-slide="prev">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" class="arrow-left" alt="лево">
                                    </a>
                                    <a class="carousel-control-next" href="#photoModal3Indicators" role="button" data-slide="next">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" class="arrow-right" alt="право">
                                    </a>
                                  </div>
                                  
                                </div>

                                
                                  
                                
                                  
                                
                              </div>
                              
                            </div>
                          </div>
                        </div>

    
                    </div>
              </div>
            </div>

          </div>
  
          <div class="anobject-stages__fourth">
            <div class="row">
              <div class="col-12 col-xl-6">
                  <div class="stages-item__right">
                      <div class="stages-item__slider">
                        <div class="slider-item current">
                          <img src="<?php the_field("stage_4_photo_2"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_4_photo_3"); ?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php the_field("stage_4_photo_4"); ?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo" data-toggle="modal" data-target="#photoModal4">
                          <img src="<?php the_field("stage_4_photo_big"); ?>" alt="">
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="photoModal4" tabindex="-1" role="dialog" aria-labelledby="photoModal4Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="modal-photo">
                                  <div id="photoModal4Indicators" class="carousel slide" data-ride="carousel">
                                    <!-- <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                       
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                        
                                      </li>
                                    </ol> -->

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                        
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="img-wrapper">
                                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                                        </div>
                                      </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#photoModal4Indicators" role="button" data-slide="prev">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" class="arrow-left" alt="лево">
                                    </a>
                                    <a class="carousel-control-next" href="#photoModal4Indicators" role="button" data-slide="next">
                                      <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" class="arrow-right" alt="право">
                                    </a>
                                  </div>
                                  
                                </div>

                                
                                  
                                
                                  
                                
                              </div>
                              
                            </div>
                          </div>
                        </div>
    
                    </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__left">
                      <div class="stages-item__digit">
                        4
                      </div>
                      <div class="stages-item__txt">
                          <div class="stages-item__title"><?php the_field("stage_4_title"); ?></div>
                          <div class="stages-item__descr"><?php the_field("stage_4_subtitle"); ?></div>
                      </div>
                      
                    </div>
              </div>
            </div>

          </div>

          
          <div class="row">
            <div class="col-12">
                <div class="modal-button">
                    <div class="button button-w">
                        <button type="button" data-toggle="modal" data-target="#orderModal">заказать проект</button>
                        <div class="img-tool blue"></div>
                      </div>
                </div>
            </div>
          </div> 


          <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5> Есть вопросы? Напишите нам!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">     
                      <!-- <div class="order-subtitle">
                          Есть вопросы? Напишите нам!
                      </div> -->
                      <div class="contacts-form-wrapper modal-form">
                          <div class="form">
                            <?php echo do_shortcode('[contact-form-7 id="159" title="modal_form"]'); ?>
                          </div>
          
                        </div>
                      
                    </div> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          
          
       
        </div>
        <!-- ./content -->
      </div>
    </section>
    <!-- ./anobject-stages -->  



<?php
// get_sidebar();
get_footer();
?>