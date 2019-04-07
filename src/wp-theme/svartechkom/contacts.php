<?php
/*
Template Name: Контакты
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
    <!-- contacts -->
    <section class="section section-first contacts">
      <div class="container-fluid">
        <!-- content -->
        <div class="content">
          <div class="row">
            <div class="col-12">
              <!-- title -->
              <div class="title contacts-title">
                <h1>Контакты</h1>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/contacts/contacts.png';?>" alt="Контакты">
              </div>
              <!-- ./title -->
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-8">     
              <div class="contacts-left">
                <div class="contacts-subtitle">
                    Если у Вас есть впоросы или Вы готовы обсудить проект - напишите нам!
                  </div>

                  <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="contacts-part">
                            <div class="contacts-part__phone">
                              <span>Телефон</span>: <?php the_field('company_phone');?>
                            </div>
                            <div class="contacts-part__email">
                              <span>E-mail</span>: <?php the_field('company_email');?> 
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contacts-part">
                            <div class="contacts-part__mode">
                              <span>Режим работы</span>: <?php the_field('company_shedule');?>
                            </div>
                            <div class="contacts-part__address">
                              <span>Адрес</span>: <?php the_field('company_address');?>
                            </div>
                        </div>
                    </div>
                  </div>
              
              </div>
            </div>
            <div class="col-12 col-xl-4">

            </div>

          </div>
          <div class="row">
            <div class="col-12  col-xl-8">     
              <div class="contacts-left">
                
                <div class="contacts-form-wrapper">
                  <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="151" title="contacts_form"]');?>
                  </div>
  
                </div>
              
              </div>
            </div>
            <div class="col-12  col-xl-4">
              <div class="contacts-right">
                <div class="contacts-right__photo">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/contacts/contacts-photo.jpeg';?>" alt="ООО СварТехКом">
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
    <!-- ./contacts -->

<?php 
get_footer(); 
?>