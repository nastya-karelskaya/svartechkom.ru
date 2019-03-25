<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package svartechkom
 */

get_header();
?>

      <!-- section main -->
      <section class="section-first main ">
        <div class="container-fluid">
      
          <div class="content">
              <div class="main-title">
                <div class="row">
                  <div class="col-12">
                      <h1>
                          ООО "СварТехКом" 
                          <span class="main-title__part">Надежный производитель металлоконструкций                        </span>
                          <span class="main-title__part">различного назначения</span>
                      </h1>
                  </div>
                </div>
              </div>
              <div class="main-txt">
                <div class="row">
                  <div class="col-12 col-lg-8">
                    <div class="main-txt__title">
                        Изготавливаем металлоконструкции в Карелии с 2012 года. 
                    </div>
                    <div class="main-txt__descr">
                      За 6 лет специалисты ООО "СварТехКом" выполнили работы различного объема 
                        и сложности: от проектов по <a href="#">изготовлению и монтажу металлоконструкций для 
                            жилых домов</a>, до создания <a href="#">нестандартных 
                                металлоконструкций</a>.
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-8">
                      <div class="main-txt__block">
                          <div class="block-img">
                            <img src="images/index/main/img-left.jpeg" alt="Работы ООО СварТехКом">
                          </div>
                          <div class="block-descr">
                              <div class="block-descr__title">
                                  Осуществляем полный комплекс мероприятий:
    
                              </div>
    
                              <ul class="block-descr__subtitle">
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Подготовка проектной документации</li>
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Изготовление изделия    
                                  </li>
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Покраска    
                                  </li>
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Доставка    
                                  </li>
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Монтаж конструкции   
                                  </li>
                                <li><img src="images/index/main/list-item.png" alt="Пункт">
                                  Передача технадзору</li>
                              </ul>
                            
                          </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-4">
                      <div class="main-img">
                          <img src="images/index/main/img-right.jpeg" alt="Комплекс мероприятий">
                      </div>
                  </div>
                </div>
              </div>
          </div>
          

        </div>
      </section>
      <!-- ./ section main -->
      
      <!-- services -->
      <section class="section services">
        <div class="container-fluid">
          
          <div class="content">
            
            <div class="row">
              <div class="col-12">
                
                <div class="title services-title">
                  <h2>УСЛУГИ</h2>
                  <img src="images/index/services/services.png" alt="Услуги">
                </div>
                
              </div>
            </div> 
            
            <div class="services-items">
              <div class="row">
                <div class="col-12">

                  <div class="services-items__big services-item">
                    <a href="aservice.html">
                        <h3 class="services-item__title">
                      
                            Изготовление <br>
                            металлоконструкций
                        </h3>
                    </a>
                    
                  </div>

                </div>
              </div>
              
              <div class="row">
                  
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ГИБКА МЕТАЛЛА <br>И ТРУБ</h3>
                      </a>
                      
                    </div>                    
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ГАЗОВАЯ РЕЗКА 
                              МЕТАЛА</h3>
                      </a>
                      
                    </div>
                  </div>  
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ХОЛОДНАЯ <br> 
                            КОВКА</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
              <!-- </div>
              

              <div class="row"> -->
                  
                <div class="col-12 col-md-6 col-lg-4"> 
                  <div class="services-items__small"> 
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ПОКРАСОЧНЫЕ 
                              РАБОТЫ</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4"> 
                  <div class="services-items__small">  
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">СТРОИТЕЛЬНЫЕ 
                              РАБОТЫ</h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">  
                    <div class="services-item">
                      <a href="aservice.html">
                          <h3 class="services-item__title">ДЕМОНТАЖ 
                              КОНСТРУКЦИЙ</h3>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            <!-- </div> -->
          <!-- </div> -->

          </div>
        
        </div>
      </section>
      <!-- ./services -->        
          
      <!-- objects -->
      <section class="section section-dark objects">
        <div class="container-fluid">
          
          <div class="content">
            
            <div class="row">
              <div class="col-12">
                
                <div class="title objects-title">
                  <h2>наши объекты</h2>
                  <img src="images/index/objects/objects.png" alt="Наши объекты">
                </div>
                
                <div class="objects-slider">
                    <div class="objects-slider__left arrow">
                      <img src="images/left-arrow.png" alt="лево">
                    </div>
                    <div class="objects-slider__right arrow">
                      <img src="images/right-arrow.png" alt="право">
                    </div>

                  <div class="slider-wrapper">

                    <div class="row">
                      <div class="col-12 col-lg-6 col-xl-4">
                          <div class="objects-slider__item ">
                              <div class="slider-item__title"> «АРЕНА-LIFE»
        
                              </div>
                              <div class="button button-c slider-item__button">
                                <a href="anobject.html">посмотреть</a>
                                
                                <div class="img-tool gray"></div>
                              </div>
                            </div>
                      </div>
                      <div class="col-12 col-lg-6 d-none d-lg-block col-xl-4">
                          <div class="objects-slider__item">
                              <div class="slider-item__title"> «АРЕНА-LIFE»
        
                              </div>
                              <div class="button button-c slider-item__button">
                                  <a href="anobject.html">посмотреть</a>
                                  <div class="img-tool gray"></div>
                              </div>
                            </div>
                      </div>
                      <div class="col-12 col-lg-12 d-none d-xl-block col-xl-4 ">
                          <div class="objects-slider__item">
                              <div class="slider-item__title"> «АРЕНА-LIFE»
        
                              </div>
                              <div class="button button-c slider-item__button">
                                  <a href="anobject.html">посмотреть</a>
                                  <div class="img-tool gray"></div>
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
      </section>
      <!-- ./objects -->

      <!-- reasons -->
      <section class="section reasons">
        <div class="container-fluid">
          
          <div class="content">
            
              <div class="row">
                <div class="col-12">
                
                  <div class="title reasons-title">
                    <h2>5 причин обратиться к нам</h2>
                    <img src="images/index/reasons/reasons.png" alt="Наши объекты">
                  </div>

                </div>
              </div>
                
              
                  <div class="reasons-rowone">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="reasons-rowone__item">
                          <div class="item__img">
                            <img src="images/index/reasons/reasons-item.png" alt="6 лет опыта">
                          </div>
                          <div class="item__title">6 лет опыта</div>
                        </div>
                      </div>
              

                  
                      <div class="col-12 col-md-6">

                        <div class="reasons-rowone__item">
                          <div class="item__img">
                            <img src="images/index/reasons/reasons-item.png" alt="Свое 
                            профоборудование">
                          </div>
                          <div class="item__title">Свое 
                            профоборудование</div>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="reasons-rowtwo">
                    <div class="row">
                      <div class="col-12">
                        <div class="reasons-rowtwo__item">
                          <div class="item__img">
                            <img src="images/index/reasons/reasons-item.png" alt="9 из 10 проектов сдаем 
                            без замечаний">
                          </div>
                          <div class="item__title">9 из 10 проектов сдаем 
                            без замечаний</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="reasons-rowthree">
                    <div class="row">
                      <div class="col-12 col-md-6">
                          <div class="reasons-rowthree__item">
                              <div class="item__img">
                                <img src="images/index/reasons/reasons-item.png" alt="Сертификаты НАКС">
                              </div>
                              <div class="item__title">Специалисты высокой 
                                квалификации <br>
                                Сертификаты НАКС</div>
                            </div>
                      </div>
                      <div class="col-12 col-md-6">
                          <div class="reasons-rowthree__item">
                              <div class="item__img">
                                <img src="images/index/reasons/reasons-item.png" alt="Сопровождение проекта 
                                руководством 
                                на каждом этапе">
                              </div>
                              <div class="item__title">Сопровождение проекта 
                                руководством 
                                на каждом этапе</div>
                            </div>
                      </div>
                    </div>
                    
                    
                  </div>

              
              
            
          </div>
          
        </div>
      </section>
      <!-- ./reasons -->

      <!-- reviews -->
      <section class="section section-dark reviews">
        <div class="container-fluid">
          
          <div class="content">
              <div class="row">
                <div class="col-12">
                  
                  <div class="title reviews-title">
                    <h2>отзывы</h2>
                    <img src="images/index/reviews/reviews.png" alt="Наши объекты">
                  </div>
                
                <div class="reviews-slider">
                    <div class="reviews-slider__left arrow">
                      <img src="images/left-arrow.png" alt="лево">
                    </div>
                    <div class="reviews-slider__right arrow">
                      <img src="images/right-arrow.png" alt="право">
                    </div>

                  <div class="slider-wrapper">
                    <div class="row">
                      <div class="col-12 col-xl-6">
                          <div class="reviews-slider__item">
                              <div class="slider-item__title"> 
                                <div class="title-img">
                                  <img src="images/quote.png" alt="quote">
                                </div>
                                <div class="title-txt">Название компании</div> 
                              </div>
                              <div class="slider-item__descr">
                                <div class="descr-img"></div>
                                <div class="descr-txt">Текст отзыва</div>
                              </div>
                              <div class="button button-c  slider-item__button">
                                  <a href="reviews.html">посмотреть</a>
                                <div class="img-tool gray"></div>
                              </div>
                            </div>
                      </div>
                      <div class="col-12 col-xl-6">
                          <div class="reviews-slider__item">
                              <div class="slider-item__title"> 
                                <div class="title-img">
                                  <img src="images/quote.png" alt="quote">
                                </div>
                                <div class="title-txt">Название компании</div> 
                              </div>
                              <div class="slider-item__descr">
                                <div class="descr-img"></div>
                                <div class="descr-txt">Текст отзыва</div>
                              </div>
                              <div class="button button-c  slider-item__button">
                                  <a href="reviews.html">посмотреть</a>
                                  <div class="img-tool gray"></div>
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
      </section>
      <!-- ./reviews -->

      <!-- order -->
      <section class="section order">
        <div class="container-fluid">
          
          <div class="content">
            <div class="row">
              <div class="col-12">
                
                <div class="title order-title">
                  <h2>заказать</h2>
                  <img src="images/index/order/order.png" alt="Наши объекты">
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-7 col-xl-8">     
                <div class="order-subtitle">
                    Есть вопросы? Напишите нам!
                </div>
                <div class="order-form-wrapper">
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
                      
                      <fieldset class="textarea">
                        <div class="form-txt">
                            <label for="txt">Сообщение:</label>
                            <textarea name="txt" id="" cols="30"  placeholder="Сообщение"></textarea>
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
              <div class="col-12 col-lg-5 col-xl-4">
                <div class="form-photo">
                  <img src="images/index/order/order-photo.jpeg" alt="ООО СварТехКом">
                </div>
              </div>
            </div>
          </div>
        
            
        </div>
      </section>
      <!-- ./order -->
  
  
    </div>
    <!-- ./page -->
  </div>

<?php
// get_sidebar();
get_footer();
