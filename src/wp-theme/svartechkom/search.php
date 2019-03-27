<?php get_header(); ?>

 <!-- section search -->
 <section class="section section-first search ">
      <div class="container-fluid">
   
        <div class="content">

          <div class="row">
            <div class="col-12">

              <div class="title">
                <h1>
                Результаты поиска по запросу: "<?php echo $_GET['s'];?>"
                </h1>
              </div>

              <div class="subtitle">


              <?php 
                if (have_posts()) : while (have_posts()) : the_post(); 
              ?>
                <div>
                  <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </div>

              <?php the_content(''); ?>

              <?php endwhile; else: ?>

                <p>Поиск не дал результатов.</p>

              <?php endif;?>


              </div>

            </div>
          </div>


        <!-- ./content -->
        </div>

      </div>

  </section>
        



 
 <?php get_footer(); ?>