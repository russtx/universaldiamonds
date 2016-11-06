<?php
/* Template Name: Intro To Diamonds */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="mainSection">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerImage-6.jpg" alt="banner-image-5" class="bannerImage">

                    <span class="pageTitle"><h1>Intro To Diamonds</h1></span>
                    
                    <div class="mainSectionContainer"> 

                                <!--<span class="contentHeader">
                                    <h2>Diamonds 101</h2>
                                    <h3>Orgin Of The Diamonds 4c <span>s</span></h3>
                                </span>-->
                        
                    <div class="introContainer">    
                                    <ul class="leftTabs" id="tabs-titles">
                        <li class="current">
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h2><?php the_title(); ?>&nbsp;<i class="fa fa-play" aria-hidden="true"></i></h2>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 1, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h2><?php the_title(); ?>&nbsp;<i class="fa fa-play" aria-hidden="true"></i></h2>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 2, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h2><?php the_title(); ?>&nbsp;<i class="fa fa-play" aria-hidden="true"></i></h2>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' =>  1, 'offset' => 3, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h2><?php the_title(); ?>&nbsp;<i class="fa fa-play" aria-hidden="true"></i></h2>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 4, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h2><?php the_title(); ?>&nbsp;<i class="fa fa-play" aria-hidden="true"></i></h2>

                            <?php endwhile; ?>
                        </li>
                    </ul>



                    <ul class="rightTabs" id="tabs-contents">
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <p><?php the_content(); ?></p>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 1, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <p><?php the_content(); ?></p>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 2, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <p><?php the_content(); ?></p>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' =>  1, 'offset' => 3, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <p><?php the_content(); ?></p>

                            <?php endwhile; ?>
                        </li>
                        <li>
                            <?php         
                                $args = array( 'post_type' => 'diamonds', 'posts_per_page' => 1, 'offset' => 4, 'order' => 'ASC' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <p><?php the_content(); ?></p>

                            <?php endwhile; ?>
                        </li>
                    </ul>

                     <?php wp_reset_query(); ?>   
                        
                    </div><!-- introContainer -->    
                                
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
