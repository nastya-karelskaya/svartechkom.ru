<?php
/*
Template Name: Объект
Template Post Type: objects
*/
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
                  Главная / Наши объекты / Арена-Life   
              </div>
              <div class="anobject__title">
                <h1>
                    <?php the_title(); ?>
                </h1>
              </div>

              <div class="anobject__subtitle">
                  Изготовление металлоконструкций для батутного центра
              </div>
            </div>
          </div>

          <div class="anobject__wrapper">
            <div class="row">
              <div class="col-12 col-xl-6">
                <div class="anobject__photo">
                  <img src="images/services/anobject/anobject-item.jpeg" alt="">
                </div>

              </div>
              <div class="col-12 col-xl-6">
                  <div class="anobject__descr">
                      <div class="descr-txt">
                          Для объекта были изготовлены и монтированы:
                      </div>
                      <div class="descr-lists">
                        <ul>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                              Рамы под батуты              
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Ограждения лестничных    
                                пролетов                     
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Пожарный гидрант         
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Баскетбольные кольца 
                            </div>
                          </li>
                        </ul>
    
                        <ul>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Лестница
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Ограждения верхней 
                                площадки 
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Теплотрасса
                            </div>
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            <div>
                                Выход с лестницы
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="descr-volume">
                        <span>Объем работ</span>:
                        11 тонн металлоконструкций
                      </div>
                      <div class="descr-time">
                        <span>Срок работ</span>:
                        3.5 месяцев
                      </div>
                      <div class="descr-year">
                        <span>Год</span>:
                        2016
                      </div>
                      <div class="descr-review">
                        <span>Отзыв заказчика</span>:
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
                              <div class="stages-item__title">название этапа</div>
                              <div class="stages-item__descr">Описание описание описание Описание 
                                  описание описание Описание описание 
                                  описание Описание описание описание 
                                  Описание описание описание Описание 
                                  описание описание Описание описание 
                                  описание Описание описание описание 
                                  Описание описание описание Описание 
                                  описание описание</div>
                          </div>
                          
                        </div>
                  </div>
                  <div class="col-12 col-xl-6">
                      <div class="stages-item__right">

                      
                          <div class="stages-item__slider">
                            <div class="slider-item current">
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                            </div>
                            <div class="slider-item">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                            </div>
                          </div>
                          <div class="stages-item__photo" data-toggle="modal" data-target="#photoModal">
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-photo">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                          <!-- <img src="<?php //echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt=""> -->
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                          
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                          
                                        </li>
                                      </ol>

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

                                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" class="arrow-left" alt="лево">
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                      </div>
    
                    </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__left">
                      <div class="stages-item__digit">
                        2
                      </div>
                      <div class="stages-item__txt">
                          <div class="stages-item__title">название этапа</div>
                          <div class="stages-item__descr">Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание</div>
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
                          <div class="stages-item__title">название этапа</div>
                          <div class="stages-item__descr">Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание</div>
                      </div>
                      
                    </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__right">
                      <div class="stages-item__slider">
                        <div class="slider-item current">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo">
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
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
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-small.jpeg';?>" alt="">
                        </div>
                      </div>
                      <div class="stages-item__photo" >
                          <img src="<?php echo get_template_directory_uri() . '/assets/images/services/anobject/slider-big.jpeg';?>" alt="">
                      </div>
    
                    </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="stages-item__left">
                      <div class="stages-item__digit">
                        4
                      </div>
                      <div class="stages-item__txt">
                          <div class="stages-item__title">название этапа</div>
                          <div class="stages-item__descr">Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание Описание описание 
                              описание Описание описание описание 
                              Описание описание описание Описание 
                              описание описание</div>
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
                      <div class="contacts-form-wrapper">
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
                              
                            
                              
          
                              <div class="button button-w form-button">
                                <button type="button">заказать</button>
                                <div class="img-tool blue"></div>
                              </div>
                            </form>
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