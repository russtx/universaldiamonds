<?php
/* Template Name: Contact Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerImage-8.jpg" alt="banner-image-8" class="bannerImage">

                        <span class="pageTitle"><h1>Questions?</h1></span>
                    
                    <div class="mainSectionContainer">
                        
                        <div class="contactContent">
                                <div class="leftContact">
                                    <span class="logoImage"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="logo-2" ></span>
                               
                                    <h2> Contact Us </h2>
                                    
                                    <span class="address">
                                        <a href="https://www.google.com/maps/place/37+W+47th+St,+New+York,+NY+10036/@40.7576488,-73.9825555,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258ff03771a1d:0x33e32094f3d61c22!8m2!3d40.7576448!4d-73.9803668" target="_blank">
                                        37 W 47 St, SNW<br />
                                        New York, NY 10036
                                        </a>
                                    </span>
                                    <div class="clearfix"></div>
                                    
                                    <span class="phone"><a href="tel:646559-5918">(646) 559-5918</a></span>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <span class="email">
                                        <a href="mailto:info@universaldiamondcorp.com">info@universaldiamondcorp.com</a>
                                    </span>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="package">
                                        <span class="packageImage"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-3.png" alt="package" ></span>
                                        <span><h2>Let's Get<br />
                                                Started</h2></span>
                                
                                    </div>    
                                </div><!-- leftContact -->

                                <div class="rightContact"> 

                                    <span class="contentHeader">
                                        <h2>Contact Us</h2>
                                        <h3>Get in Touch With Universal Diamond</h3>
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

                                   <?php echo do_shortcode('[gravityform id="2" title="true" description="true"]'); ?>         

                                </div><!-- rightConact -->  
                        </div><!-- contactConetent -->        
                        
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
                                
                    </div><!-- mainSectiomContainer -->        

                </section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
