<?php
    /*
    Template Name: About-me
    */
get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
      <div class="container">
        <div class="col-md-12">
          <?php while (have_posts()) :
          the_post();?>
          <?php the_content(); ?>
        </div>
      </div>






        <!-- subscribe section -->

        <div class="subscribe">
            <h3>
                Keep Track of what I'm up to!
            </h3>
            <br/>
            <form action="https://koi-coffee.us17.list-manage.com/subscribe/post?u=60d4aa03624b352acaf66ed80&amp;id=809d854556"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                  target="_blank" novalidate>
                <input type="email" value="" placeholder='Email' name="EMAIL" class="required email subscribe-input"
                       id="mce-EMAIL">
                <input type="text" value="" placeholder='First Name' name="FNAME" class="subscribe-input"
                       id="mce-FNAME">
                <input type="text" value="" name="LNAME" placeholder='Last Name' class="subscribe-input" id="mce-LNAME">
                <div id="mce-responses" class="clear">
                    <br/>
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_60d4aa03624b352acaf66ed80_809d854556" tabindex="-1" value="">
                </div>
                <br/>
                <div class="clear">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                           class="sub-btn sub-btn-sm">
                </div>
            </form>
        </div>


    </div>


    <?php endwhile; ?>

</div>
<!--/.site-main-->
</div>
<!--/.content-area-->

<?php get_footer(); ?>
