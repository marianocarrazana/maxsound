			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. Diseñado por <a target="_blank" href="https://larutaproducciones.com.ar">La Ruta Producciones</a> - Diseño Web - Hosting PHP/NodeJS/GO - Home Office - y más.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	<script type="text/javascript">
	      if ('serviceWorker' in navigator) {
	        window.addEventListener('load', () => {
	          navigator.serviceWorker.register('<?php echo get_template_directory_uri(); ?>/app/service-worker.js')
	              .then((reg) => {
	                console.log('Service worker registered.', reg);
	              });
	        });
	      }
	</script>
	</body>
</html>
