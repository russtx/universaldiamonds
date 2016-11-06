<?php 
/* Template Name: Why Universal */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerImage-5.jpg" alt="banner-image-5" class="bannerImage">

                    <span class="pageTitle"><h1>Why Universal &#63;</h1></span>
                    
                    <div class="mainSectionContainer"> 

                               

                                <span class="contentHeader">
                                    <h2>Our Mission</h2>
                                    <h3>A Higher Standard Of Quality And Service</h3>
                                </span>
                        
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class('mainContent'); ?>>

                                        <?php the_content(); ?>

                                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                                        <br class="clear">

                                        <?php edit_post_link(); ?>

                                </article>
                                <!-- /article -->

                        <?php endwhile; ?>

                        <?php else: ?>

                                <!-- article -->
                                <article>

                                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                                </article>
                                <!-- /article -->

                        <?php endif; ?>
                                
                         
                                
                        <div class="customPostArea">            
                           <?php         
                            $args = array( 'post_type' => 'why', 'posts_per_page' => 1, 'order' => 'ASC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            <div class="customPost"> 
                                <span class="leftSide"><?php the_post_thumbnail(); ?></span>

                                <span class="rightSide"><h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </span>
                                
                            </div>    
                              <?php endwhile; ?>  
                                
                            <div class="clearfix"></div> 
                            
                            
                            
                            <?php         
                            $args = array( 'post_type' => 'why', 'posts_per_page' => 1, 'offset' => 1, 'order' => 'ASC'  );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="customPost">  
                                <div class="leftSide">
                                    <span class="mobileOnly"><?php the_post_thumbnail(); ?></span>
                                    <span class="desktopOnly"><h2><?php the_title(); ?></h2><?php the_content(); ?></span>
                                </div>

                                <div class="rightSide">
                                    <span class="mobileOnly"><h2><?php the_title(); ?></h2><?php the_content(); ?></span>
                                    <span class="desktopOnly"><h2><?php the_post_thumbnail(); ?></span>
                                </div>
                            </div>    
                                
                              <?php endwhile; ?>    
                                <div class="clearfix"></div>

                            <?php         
                            $args = array( 'post_type' => 'why', 'posts_per_page' => 1, 'offset' => 2, 'order' => 'ASC'  );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                
                            <div class="customPost"> 
                                
                                <span class="leftSide">
                                    <?php the_post_thumbnail(); ?><
                                
                                </span>

                                <div class="rightSide"><h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </div>
                            </div>  
                            <?php endwhile;  
                            ?> 
                            <?php wp_reset_query(); ?>    
                            
                                
                                <div class="clearfix"></div>       
                                
                        </div><!-- customPostArea --> 
                        
                        <div class="lowerImage">
                            <img src="<?php echo get_post_meta($post->ID, 'custom_field_image', true); ?>">
                        </div>
                        
                        <div class="lowerText">
                            <p><?php echo get_post_meta($post->ID, 'text', true); ?></p>
                        </div>
                        
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
                        
                    </div><!-- mainSectionContainer -->            

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
