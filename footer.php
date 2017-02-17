			<!-- footer -->
			<footer class="footer section" id="contact" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-md-12 contact-title">
							<h2>Contacto</h2>
							<h4>¿Tenés una consulta? Escribinos y contanos, respondemos a la brevedad.</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-5 info-contacto">
							<?php dynamic_sidebar('widget-foo-1') ?>
						</div>
						<div class="col-lg-4 col-md-7 form-contacto">
							<?php dynamic_sidebar('widget-foo-2') ?>
						</div>
						<div class="col-lg-3 offset-lg-1 servicio-contacto">
							<?php dynamic_sidebar('widget-foo-3') ?>
						</div>
					</div>
				</div>
				
				<div class="bottom-foo">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- copyright -->
								<p class="copyright">
									&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
								</p>
								<!-- /copyright -->
							</div>	
							<div class="col-md-6 credit">
								<p>Este sitio es una creación de  <a href="http://tapirus.com.ar" target="_blank" class="tcolor">T a p i r u s</a></p>
							</div>
						</div>
					</div>
				</div>

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
