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
                    <div class="clearfix"></div>
                    <a href="#"><button>Learn More</button></a>

                </div><!-- iconArea -->  
                
                <div class="midSection">
                    <div class="midSectionContainer">
                        <div class="leftSide">
                            <div class="mask">
                                <ul class="images">
                                   <li>
                                        
                                     <?php         
                                        $args = array( 'post_type' => 'slider', 'posts_per_page' => 1,  'order' => 'ASC' );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                        <span>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </span> 


                                        <?php the_post_thumbnail(); ?>

                                        <?php endwhile; ?> 

                                   </li>
                                   <li>
                                       <?php         
                                        $args = array( 'post_type' => 'slider', 'posts_per_page' => 1, 'offset' => 1,  'order' => 'ASC' );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                        <span>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </span> 


                                        <?php the_post_thumbnail(); ?>

                                        <?php endwhile; ?> 

                                   </li>
                                    <li>
                                        <?php         
                                        $args = array( 'post_type' => 'slider', 'posts_per_page' => 1, 'offset' => 2,  'order' => 'ASC' );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                        <span>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </span> 


                                        <?php the_post_thumbnail(); ?>

                                        <?php endwhile; ?> 

                                   </li>
                                   <li>
                                       <?php         
                                        $args = array( 'post_type' => 'slider', 'posts_per_page' => 1, 'offset' => 3,  'order' => 'ASC' );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                        <span>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </span> 


                                        <?php the_post_thumbnail(); ?>

                                        <?php endwhile; ?> 

                                   </li>
                                   <li>
                                       <?php         
                                        $args = array( 'post_type' => 'slider', 'posts_per_page' => 1, 'offset' => 4,  'order' => 'ASC' );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                        <span>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                        </span> 


                                        <?php the_post_thumbnail(); ?>

                                        <?php endwhile; ?> 

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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamonds-1.png" alt="diamond-1">
                            <h2>Have A Question?</h2>
                            <p>Get in touch with us</p>
                            <a href="<?php echo home_url(); ?>/contac-us"><button>Contact Us Now</button></a>
                        </div><!-- rightSidde -->
                    </div><!-- misSectionContainer -->
                </div><!-- midSection -->
                
                <div class="clearfix"></div>
                
                
                <div class="lowerSection">
                    <div class="lowerSectionContainer">
                        
                        <div class="leftSide2">
                            <h2>Intro To Diamonds</h2>
                            <p>Take a Crash Course in the 4 C<span>s</span></p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-2.png" alt="diamond-2">
                            <a href="<?php echo home_url(); ?>/intro-to-diamonds"><button>Learn More</button></a>
                        </div><!-- leftSide2 -->

                        <div class="rightSide2">
                            <h2>Diamond Pricing</h2>
                            <p>Take a Look At Our Pricing Chart</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamonds-3.png" alt="diamond-3">
                            <a href="<?php echo home_url(); ?>/pricing"><button>Learn More</button></a>
                        </div><!-- rightSide -->
                    </div><!-- lowerSectionContainer -->
                </div><!-- lowerSection -->
                
                <div class="clearfix"></div>
                
                <div class="formArea">
                    <div class="formHeader">
                        <div class="topRow">
                            <span class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-icon.png" alt="diamond-icon">
                            </span>
                            <h2>Let's Get Started!</h2>
                        </div>
                        <p>Submit Your Diamonds or Precious Metals...</p>
                    </div>    
                        
                    
                    
                    
                    <aside class="formButtons">
                        <span class="borderLine">
                            <a href="#"><button class="circle">&#40; 1 &#41;</button></a>
                                <p>Fill Out Form</p>
                        </span>
                        <span class="borderLine">
                            <a href="#"><button class="circle">&#40; 2 &#41;</button></a>
                                <p>Get a Free Shipping label</p>
                        </span>
                        <span class="borderLine">
                            <a href="#"><button class="circle">&#40; 3 &#41;</button></a>
                                <p>Arrange For A Pick Up</p>
                        </span>
                        <span class="borderLine">
                            <a href="#"><button class="circle">&#40; 4 &#41;</button></a>
                                <p>Receive An Offer</p>
                        </span>
                    </aside>
                    
                    <article class="formContent">
                        <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
                    </article>
                </div><!-- formArea -->
                

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
