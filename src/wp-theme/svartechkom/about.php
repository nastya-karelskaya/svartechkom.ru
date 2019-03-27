<?php
/*
Template Name: О нас
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>
       
    <!-- about -->
    <section class="section section-first about">
      <div class="container-fluid">
        <!-- content -->
        <div class="content">
          
          <div class="row">
            <div class="col-12">
              <!-- title -->
              <div class="title about-title">
                <h1>о компании</h1>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/about/about.png';?>" alt="О компании">
              </div>
              <!-- ./title -->
            </div>
          </div>  
          <div class="row">
            <div class="col-12 col-xl-6">
                <div class="about-left">
                    <div class="about-left__descr">
                        ООО "СварТехКом" предоставляет широкий спект услуг в сфере 
                        металлоконструкций:
                    </div>
                    <div class="about-left__lists">
                      <div class="row">
                        <div class="col-12 col-sm-6">
                            <ul>
                              <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                Изготовление 
                                  <br> металлоконструкций
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                  Газовая резка металла                    
                                            
                              </li>
                              <li>
                                  <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                  Покрасочные работы   
                              </li>
                            
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6">
                          <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                Гибка металла и труб
        
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                              Холодная ковка
        
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                Строительные работы                
                                    
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                                Демонтаж конструкций 
                            </li>
                          </ul>
                        </div>
                      </div>
                      
                      
                    </div>
    
                    <div class="about-left__descr">Мы ценим индивидуальный подход к выполнению проектов: </div>
                    <div class="about-left__lists">
                      <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            Перед началом работ проводим ревизию проектной 
                            документации, помогаем исправить чертежи, если 
                            необходимо.
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/tool-blue.png';?>" alt="">
                            Руководители проектов обеспечивают сопровождение на 
                            каждом этапе и лично сдают работу заказчику.
                             
                        </li>
                      
                      </ul>
                    </div>
    
                    <div class="about-left__photo">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/about/photo-left.jpeg';?>" alt="">
                    </div>
    
                  </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="about-right">
                    <div class="about-right__photo">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/about/photo-right.jpeg';?>" alt="">
                    </div>
                    <div class="about-right__descr">
                        В нашем штате есть специалисты, сертифицированые НАКС. 
                        Это позволяет выполнять ремонт металлоконструкций под давлением
                        (газопровод, водопровод, пожарный гидрант и пр.)
                    </div>
                    <div class="about-right__descr">
                      Наши специалисты могут работать вахтовым методом.
                        При необходимости готовы работать на территории заказчика, со 
                        своим оборудованием.</div>
  
  
                </div>
            </div>
          </div>

             
              
             
          
          
        </div>
        <!-- ./content -->
      </div>
    </section>
    <!-- ./about -->

<?php 
get_footer(); 
?>