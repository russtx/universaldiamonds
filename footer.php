			
                         </div><!-- /wrapper -->
                        
                         <div class="clearfix"></div>
                         
                         <!-- footer -->
                        <footer class="footer" role="contentinfo">
                            
                            <span class="bluetop"></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="footer-Logo">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
