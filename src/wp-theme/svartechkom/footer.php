<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package svartechkom
 */

?>

    </div>
    <!-- ./page -->
  </div>

  

  

 <div class="container-fluid fixed-container footer-container" >
    <footer class="footer">

        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="footer-copyright">
              ООО "СварТехКом" &copy; 2019
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="footer-politics">
              <a href="#">Политика конфиденциальности</a>
            </div>
          </div>
          
        </div>

      <!-- ./footer -->
    </footer>
  </div>
  

<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js';?>"></script>
<!-- <script src="<?php //echo get_template_directory_uri() . '/assets/js/bootstrap.min.js';?>"></script> -->

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				

<script>
  $('.main-objects-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: '<a class="objects-slider__left arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>"</a>',
    nextArrow: '<a class="objects-slider__right arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>"</a>',
    
    responsive: [
      {
        breakpoint: 1450,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: false,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.main-reviews-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: '<a class="reviews-slider__left arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>"</a>',
    nextArrow: '<a class="reviews-slider__right arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>"</a>',
    
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: false
        }
      }
    ]
  });

  $('.aservice-objects-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: '<a class="aservice-objects-slider__left arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.png';?>"</a>',
    nextArrow: '<a class="aservice-objects-slider__right arrow"><img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>"</a>',
    
    responsive: [
      {
        breakpoint: 1250,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: false
        }
      }
    ]
  });
</script>



</body>
</html>
