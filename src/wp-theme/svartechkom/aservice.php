<?php
/*
Template Name: Услуга
Template Post Type: allservices
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
                          Создаем и монтируем металлоконструкции различной сложности: 
                        </div>
            
                        <ul class="main-left__list">
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div>Ограждения для кровли</div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div>Контуры заземления здания</div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div>Ограждения балконов, окон, лестничных маршей, детских площадок</div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div>Противопожарные козырьки</div>
                          </li>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Пункт">
                            <div>Другое</div>  
                          </li>
                        </ul>
                      </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="aservice-main__right">
                        <div class="main-right__txt">
                            Работаем по договору. Стоимость и сроки выполнения работ
                            оговариваются индивидуально для каждого проекта. 
                        </div>
                        <div class="main-right__txt">
                            Возможна работа вахтенным методом или выезд со своим 
                            оборудованием на территорию заказчика.
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

        <div class="row">
          <!-- .slider -->
          <div class="aservice-objects-slider">
              <a class="aservice-objects-slider__left arrow">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>" alt="лево">
              </a>
              <a class="aservice-objects-slider__right arrow">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>" alt="право">
              </a>

            <div class="aservice-slider-wrapper">
              <div class="row">
                  <div class="col-12 col-xl-6">
                      <div class="aservice-objects-slider__item ">
                          <div class="slider-item__photo">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="">                      
                          </div>
                          <div class="slider-item__txt">
                              <div class="slider-item__title"> 
                                «АРЕНА-LIFE»
                              </div>
                              <div class="slider-item__descr"> 
                                  Изготовление и монтаж 
                                  металоконструкций для 
                                  батутного центра
                              </div>
                              <div class="button button-c slider-item__button">
                                <a href="anobject.html">посмотреть</a>
                                <div class="img-tool gray" ></div>
                              </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-12 col-xl-6 ">
                      <div class="aservice-objects-slider__item ">
                          <div class="slider-item__photo">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/services/aservice/aservice-object-item.jpeg';?>" alt="">                      
                          </div>
                          <div class="slider-item__txt">
                              <div class="slider-item__title"> 
                                «АРЕНА-LIFE»
                              </div>
                              <div class="slider-item__descr"> 
                                  Изготовление и монтаж 
                                  металоконструкций для 
                                  батутного центра
                              </div>
                              <div class="button button-c  slider-item__button">
                                <a href="anobject.html">посмотреть</a>
                                <div class="img-tool gray"></div>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
              

            </div>

          </div>
          <!-- .slider -->
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