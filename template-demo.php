<?php 
/* Template Name: Demo Page Template */ 
get_header(); ?>
  
	<main role="main">
		<!-- section -->
                <section  class="mainSection">
                    <div class="mainSectionContainer">
                        
                        
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


        </div><!-- mainSectionContainer -->

    </section>
		<!-- /section -->
    </main>



<?php get_footer(); ?>
