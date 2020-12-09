<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class='flexy-center' style="width:100%;">
<div class="col-md-10 share">
  <div class="social-share">
    <p style="text-transform: uppercase; letter-spacing: 1px;">Instagram</p>
  </div>
  <!-- ./social-share -->
</div>
<!-- ./col-md-6 ./share -->
</div>

<?php
/**
* Displays footer widgets if assigned
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>






	 <script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>


  <script>
  $(document).on('ready', function() {

    $('#overlay-button').click(function () {
      if($(document.body).css("overflow") === 'visible') {
        $(document.body).css("overflow", "hidden");
      } else {
        $(document.body).css("overflow", "visible");
      }
    });

    $(".main-slide").slick({
      dots: false,
      infinite: true,
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerPadding: '26.3%',
      pauseOnHover: true,
      pauseOnFocus: true,
      autoplay: true,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 1724,
          settings: {
            centerPadding: '23.5%'
          }

       },
       {
         breakpoint: 1524,
         settings: {
           centerPadding: '20%'
         }

      },
      {
        breakpoint: 1250,
        settings: {
          centerPadding: '13.4%'
        }

     },
      {
        breakpoint: 1044,
        settings: {
          centerPadding: '15%'
        }

     },
     {
       breakpoint: 900,
       settings: {
         centerPadding: '8%'
       }

    },
    {
      breakpoint: 600,
      settings: {
        centerPadding: '0%'
      }

     }

     ]
    });

  });

  </script>

<?php if ( is_front_page() ) : ?>
	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<?php endif; ?>



</div>

<?php

if ( is_active_sidebar( 'instagram' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
	    <div id="insta-yuff-white">	    </div>
	    <div id="insta-yuff">
		    <a style="color:black" href="http://instagram.com/yuffieh_">@yuffieh_</a>
	    </div>

    <?php dynamic_sidebar( 'instagram' ); ?>
    </div>

<?php endif; ?>

<!--
<footer>

	testing

</footer>
-->



<?php wp_footer(); ?>

</body>
</html>
