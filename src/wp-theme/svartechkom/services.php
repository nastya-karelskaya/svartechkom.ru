
<?php
/*
Template Name: Услуги
*/
?>

<!-- Здесь html/php код шаблона -->



<?php 
get_header();
?>
       
    <!-- services -->
    <section class="section section-first services">
      <div class="container-fluid">
        <!-- content -->
        <div class="content">
          <div class="row">
            <div class="col-12">
              <!-- title -->
              <div class="title services-title">
                <h1>УСЛУГИ</h1>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/index/services/services.png';?>" alt="Услуги">
              </div>
              <!-- ./title -->
            </div>

          </div>
          

          <div class="services-descr">
            <div class="row">
              <div class="col-12 col-lg-6">
                  <div class="services-descr__one">
                      <div class="descr-one__txt">
                          К каждому проекту - профессиональный подход. Руководители готовы предложить лучшие условия и контролируют рабочий процесс на каждом этапе:
                      </div>
                      <div class="descr-one__txt">
                        <ul>
                          <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                            Получение или создание проектной документации 
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                              Изготовление изделия 
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                              Покраска (опционально)
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                              Доставка 
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                              Монтаж конструкции 
                          </li>
                          <li>
                              <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="Услуга">
                              Передача тех-надзору
                          </li>
                        </ul>
                      </div>
        
                    </div>
              </div>
              <div class="col-12 col-lg-6">
                  <div class="services-descr__two">
                      <div class="descr-two__txt">
                          Наши специалисты могут работать вахтовым методом. <br>
                          Готовы приехать на территорию заказчика со своим оборудованием.
                      </div>
                      <div class="descr-two__txt">
                          Стоимость работ и сроки изготовления металлоконструкций 
                          оговариваются индивидуально. Вы можете позвонить нам или 
                          оставить свои контактные данные здесь (ссылка на страницу "Контакты").
                      </div>
      
                  </div>
              </div>
            </div> 
          </div>

          <div class="services-items">
            


            <?php  
              $posts = get_posts( array(
                    'numberposts' => 10,
                    
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    //'meta_key'    => '',
                    //'meta_value'  =>'',
                    'post_type'   => 'allservices',
                    //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );
  
              
              $big_post = $posts[0];
              //echo $big_post;
              
              if($big_post) {
                $big_post_id = $big_post->ID;
                $big_post_link = get_the_permalink ( $big_post_id);

              ?>

              <div class="row">
                <div class="col-12">
  
                  <div class="services-items__big services-item">
                    <a href="<?php echo $big_post_link; ?>">
                        <h3 class="services-item__title">
                      
                            <?php echo $big_post->post_title; ?>
                        </h3>
                    </a>
                    
                  </div>
  
                </div>
              </div>


              <?php 

              }

                  
  
            ?>
                      
  
            <div class="row">
  
            <?php
            foreach( $posts as $post ){
              if($post != $big_post) {
                setup_postdata($post);
                    
                
                  
            ?>

  
                <div class="col-12 col-md-6 col-lg-4">  
                  <div class="services-items__small">
                    <div class="services-item">
                      <a href="<?php the_permalink(); ?>">
                          <h3 class="services-item__title"><?php the_title(); ?></h3>
                      </a>
                      
                    </div>
                  </div>
                </div>
  
                <?php
                  }
                  }
  
                  wp_reset_postdata(); // сброс
  
                ?>
  
  
  
              </div>
            </div>
  

          

        </div>
        <!-- ./content -->
      </div>
    </section>
    <!-- ./services -->   

<?php 
get_footer(); 
?>