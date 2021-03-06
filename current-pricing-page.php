<?php 
/* Template Name:Current Pricing Page */ 
get_header(); ?>

	<main role="main">
		<!-- section -->
                
                
                
                <section class="mainSection">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerImage-4.jpg" alt="banner-image-3" class="bannerImage">
                    
                     <span class="pageTitle"><h1>What We Pay</h1></span>
                    <div class="mainSectionContainer">   
                        
                        <span class="contentHeader">
                                    <h2>Current Pricing</h2>
                                    <h3>Up&#8226;To&#8226;Date Pricing For Diamonds And Jewelry</h3>
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
                                
                                <?php wp_reset_query(); ?>
                                
                                <div class="chartContainer">
                                    <div class="pricingChart">

                                        <span class="chartHeader">
                                            <h2>Select Size:</h2>
                                            <select id="reportsSelect">

                                                <option value="imaging" id="imaging" onclick="show(this)">0.5-0.60 ct rounds</option>
                                                <option value="inventory" id="inventory" onclick="show(this)">0.7-.89 ct rounds</option>
                                                <option value="chargeback" id="chargeback" onclick="show(this)">0.9-0.99-rounds</option>
                                                <option value="studentJobAccount" id="studentJobAccount" onclick="show(this)">1.00-1.49-ct-rounds</option>
                                                <option value="studentAccount" id="studentAccount" onclick="show(this)">1.5-1.99-ct-rounds</option>
                                                <option value="studentcount" id="studentcount" onclick="show(this)">2-2.99-ct-rounds</option>

                                            </select>
                                        </span>    

                                            <div class="none active" id="imagingDiv">
                                                 <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                        
                                                    <?php the_post_thumbnail(); ?>
                                                                           
                                                    <?php endwhile; ?>  
                                            </div>
                                            <div class="none" id="inventoryDiv">
                                                <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'offset' => 1, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                                    <?php the_post_thumbnail(); ?>

                                                    <?php endwhile; ?> 
                                            </div>
                                            <div class="none" id="chargebackDiv">
                                                <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'offset' => 2, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                                    <?php the_post_thumbnail(); ?>

                                                    <?php endwhile; ?> 
                                            </div>
                                            <div class="none" id="studentJobAccountDiv">
                                                <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'offset' => 3, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                                    <?php the_post_thumbnail(); ?>

                                                    <?php endwhile; ?> 
                                            </div> 
                                            <div class="none" id="studentAccountDiv">
                                                <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'offset' => 4, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                                    <?php the_post_thumbnail(); ?>

                                                    <?php endwhile; ?> 
                                            </div>
                                            <div class="none" id="studentcountDiv">
                                                <?php         
                                                    $args = array( 'post_type' => 'price', 'posts_per_page' => 1, 'offset' => 5, 'order' => 'ASC' );
                                                    $loop = new WP_Query( $args );
                                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                                    <?php the_post_thumbnail(); ?>

                                                    <?php endwhile; ?> 
                                            </div>

                                    </div><!--pricingChart-->
                                </div><!-- chartContainer -->
                                
                                 <div class="lowerText mainContent">
                            <h3><?php echo get_post_meta($post->ID, 'text-header', true); ?></h3>
                            <p><?php echo get_post_meta($post->ID, 'text', true); ?></p>
                        </div>
			
                    </div><!-- mainSectionContainer -->  
                    
                    <div class="clearfix"></div>
                    
                    

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
