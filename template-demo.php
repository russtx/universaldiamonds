<?php 
/* Template Name: Demo Page Template */ 
get_header(); ?>
  
	<main role="main">
		<!-- section -->
                <section  class="mainSection">
                    <div class="mainSectionContainer">
                        
                        
                        <select id="reportsSelect">
                           
                           <option value="imaging" id="imaging" onclick="show(this)">0.5-0.60 ct rounds</option>
                           <option value="inventory" id="inventory" onclick="show(this)">0.7-.89 ct rounds</option>
                           <option value="chargeback" id="chargeback" onclick="show(this)">0.9-0.99-rounds</option>
                           <option value="studentJobAccount" id="studentJobAccount" onclick="show(this)">1.00-1.49-ct-rounds</option>
                           <option value="studentAccount" id="studentAccount" onclick="show(this)">1.5-1.99-ct-rounds</option>
                           <option value="studentcount" id="studentcount" onclick="show(this)">2-2.99-ct-rounds</option>
                       </select>

                       <div class="none active" id="imagingDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/0.5-0.69-ct-rounds.jpg" alt="0.5-0.60 ct rounds" class="chartImage" >
                       </div>
                       <div class="none" id="inventoryDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/0.7-.89-ct-rounds.jpg" alt="0.7-.89-ct-rounds" class="chartImage" >
                       </div>
                       <div class="none" id="chargebackDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/0.9-0.99-rounds.jpg" alt="0.9-0.99-rounds" class="chartImage" >
                       </div>
                       <div class="none" id="studentJobAccountDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.00-1.49-ct-rounds.jpg" alt="1.00-1.49-ct-rounds" class="chartImage" >
                       </div> 
                       <div class="none" id="studentAccountDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.5-1.99-ct-rounds.jpg" alt="1.5-1.99-ct-rounds" class="chartImage" >
                       </div>
                       <div class="none" id="studentcountDiv">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2-2.99-ct-rounds.jpg" alt="2-2.99-ct-rounds" class="chartImage" >
                       </div>
       


                    </div><!-- mainSectionContainer -->

                </section>
		<!-- /section -->
    </main>



<?php get_footer(); ?>
