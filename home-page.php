<?php 
/* Template Name: Home Page  */ 
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">
                    <div class="homeBanner">
                       
                        <h2>
                            Easy And Convenient<br />
                            Selling Experience
                        </h2>
                        <a href="<?php echo home_url ?>/get-a-shipping-label/"><button>Get a Shipping Label</button></a>
                    </div>
                    
                    <div class="homeContentHeader">
                        <h2>
                            Why Choose Us?
                        </h2>
                        <h3>
                            A Seamless, Transparent Experience...
                        </h3>
                    </div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('homeContent'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
                        <div class="clearfix"></div>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                <div class="iconArea">
                    
                    <div class="homeIcons">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-1.png" alt="icon-1" class="icon-img">
                            <h2>We Put The<br />
                                Customer First...</h2>
                        </a>
                    </div>
                    
                    <div class="homeIcons">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png" alt="icon-2" class="icon-img">
                            <h2>Diamonds<br />
                                Are More...</h2>
                        </a>
                    </div>
                    
                    <div class="homeIcons">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-3.png" alt="icon-3" class="icon-img">
                            <h2>Request A<br />
                                shipping label...</h2>
                        </a>
                    </div>
                    
                    <a href="#"><button>Learn More</button></a>

                </div><!-- iconArea -->  
                
                <div class="midSection">
                    <div class="leftSide">
                        <div class="mask">
                            <ul class="images">
                               <li>
                                   <span>
                                       <h2>What We Buy</h2>
                                       <p>Watches, Diamonds, Jewelry, etc.</p>
                                   </span>  
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.png" alt="icon-2" class="icon-img">

                               </li>
                               <li>
                                   <span>
                                       <h2>PIX 2</h2>
                                       <p>Some More Text</p>
                                   </span> 
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.png" alt="icon-2" class="icon-img">

                               </li>
                                <li>
                                    <span>
                                       <h2>PIX 3</h2>
                                       <p>Some More Text</p>
                                   </span>
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.png" alt="icon-2" class="icon-img">

                               </li>
                               <li>
                                   <span>
                                       <h2>PIX 4</h2>
                                       <p>Some More Text</p>
                                   </span>
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.png" alt="icon-2" class="icon-img">

                               </li>
                               <li>
                                   <span>
                                       <h2>PIX 5</h2>
                                       <p>Some More Text</p>
                                   </span>
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.png" alt="icon-2" class="icon-img">

                               </li>
                            </ul>
                        </div><!-- mask -->

                            <ul class="triggers">
                               <li></li>
                               <li></li>
                               <li></li>
                               <li></li>
                               <li></li>
                            </ul>
                    </div><!-- leftSide -->
                    <div class="rightSide">
                        
                    </div>
                    
                </div>
                
                

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>