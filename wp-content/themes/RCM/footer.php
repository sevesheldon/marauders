			<div id="above-footer">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/RC_OR_transp.png" alt="Rose City, OR">
				</a>
			</div>			

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="socials" id="socials-footer">
						<a target="_blank" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Facebook.png" alt="facebook" class="social-icon">
						</a>
						<a target="_blank" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Instagram.png" alt="instagram" class="social-icon">
						</a>
						<a target="_blank" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Twitter.png" alt="twitter" class="social-icon">
						</a>
						<a target="_blank" href="#">	
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Linkedin.png" alt="linkedin" class="social-icon">
						</a>
						<a target="_blank" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/YouTube.png" alt="youtube" class="social-icon">
						</a>
				</div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> |
					<a href="http://kentoncodeworks.com/" title="KCW">Kenton Codeworks</a>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

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
