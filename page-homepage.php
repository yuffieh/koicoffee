<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post();  
			
		?>
			
			


		  <!-- slider section -->
		  <div class="slide-section">
		    <div class="main-slide">
			    
			    
				<?php 

				
				$categories = get_categories($args_cat);
				$count = 0;
				foreach($categories as $category):
					
					$args = array( 
						'type' => 'post',
						'posts_per_page' => 4,
						'order_by' => 'date',

					);
					
					$lastBlog = new WP_Query( $args ); 
					
					if( $lastBlog->have_posts() ):
						
						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
							<div class="blog-pre">
								<span class="pre-title"> <?php echo get_the_date( 'd.M.Y' ); ?> </span>
								<div class="pre-content">
							    	
							    	
									<?php the_title( sprintf('<a href="%s">', esc_url( get_permalink() ) ),'</a>' ); ?>
									<br/>
									<small><?php the_category(' '); ?></small>
							    </div>
							    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?> " style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)" class="slide-featured-image"></a>
							    
							</div>
						    

						
						<?php endwhile;
						
					endif;
					
					wp_reset_postdata();
				
				$count++;
					
				endforeach;
			
			?>
					      
		    </div><!-- ./main-slide -->
		  </div>
		  <!-- ./slide-secton -->
		  <!-- slide end -->
		  
		  <hr />


		<!-- multi blog section -->

		
		<div class="section">
			  
			  <?php 


					
					$args = array( 
						'type' => 'post',
						'posts_per_page' => 6,
						'order_by' => 'date',
						'order' => 'DESC',
					);
					
					$lastBlog = new WP_Query( $args ); 
					
					if( $lastBlog->have_posts() ):
						
						while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
							<div class="row">
								<div class="col-md-6 blog-col-img">
							      <a href=<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?> style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)" class="slide-featured-image"></a>
							    </div>
								<div class="col-md-5 blog-col-content">
							        <span class="info">
							        <?php the_title( sprintf('<a href="%s"><h4 class="title">', esc_url( get_permalink() ) ),'</h4></a>' ); ?>
								        <p class="date">
									        <?php echo get_the_date( 'd.m.Y' ); ?> / <?php the_category(' '); ?>
						            	</p>
									</span>
					
									<div>
										
										<?php
											echo wp_trim_words( get_the_content(), 120, '...' );
											?>
						           
						        	</div>
					
									<a href=<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>><button class="blog-col-btn">Read More</button></a>
							
							    </div> 
							    <!-- ./blog-col-content -->
							    <br />
					
							    <div class="col-md-6 share">
							      <div class="social-share">
							        <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							        <a href="http://twitter.com/yuffieh_"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							        <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							        <a href="http://facebook.com/yuffieh"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
							      </div>
							      <!-- ./social-share -->
							    </div>
							    <!-- ./col-md-6 ./share -->
							</div>
							<!-- ./row -->
						    

						
						<?php endwhile;
						
					endif;
					
					wp_reset_postdata();
				

			
			?>
			  
		</div><!-- ./section -->
		
		<!-- multi blog ection end -->
		
		
		  <!-- subscribe section -->
		
		    <div class="subscribe">
		      <h3>
		        Keep Track of what I'm up to!
		      </h3>
		      <br />
			    <form action="https://koi-coffee.us17.list-manage.com/subscribe/post?u=60d4aa03624b352acaf66ed80&amp;id=809d854556" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="email" value="" placeholder='Email' name="EMAIL" class="required email subscribe-input" id="mce-EMAIL">
					<input type="text" value="" placeholder='First Name' name="FNAME" class="subscribe-input" id="mce-FNAME">
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
					    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="sub-btn sub-btn-sm">
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
