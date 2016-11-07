<?php
/* Template Name: About Us */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerImage-7.jpg" alt="banner-image-7" class="bannerImage">

                        <span class="pageTitle"><h1>About Us</h1></span>

                <div class="mainSectionContainer"> 
                    
                    <div class="aboutSection">
                            <div class="leftAbout desktopOnly">
                                <?php // check if the post has a Post Thumbnail assigned to it.
                                    if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                    } 
                                    the_content(); ?>
                                <h2>Let's Get<br />
                                    Started !</h2>

                            </div><!-- leftAbout -->        
                            <div class="rightAbout">    
                                                    <span class="contentHeader">
                                                        <h2>About Us</h2>
                                                        <h3>Discover The Difference of Universal</h3>
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

                            </div><!--rightAbout -->    

                    </div><!-- aboutSection -->

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
                </div><!-- mainSectiomContainer -->        

                </section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
