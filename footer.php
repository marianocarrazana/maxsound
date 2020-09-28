	<div style="text-align: center;margin: 1em">		<!-- Start of WebFreeCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=gfoxda&nd=6&style=22" border="0" alt="hit counter"></a>
<!-- End of WebFreeCounter Code --></div>
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
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vanilla-tilt.babel.min.js"></script>
	<script  type="text/javascript"  src="<?php echo get_template_directory_uri(); ?>/js/smarquee.js"></script>

	<script type="text/javascript">
		var radioStats = "https://stream.larutaproducciones.com.ar/8126/statistics";
		var smarquee = null;
		var marqueeText = "Cargando...";
	        window.addEventListener('load', () => {
	        smarquee = new Smarquee({velocity: 50,styleOptions:{delay:"1s",pausePercent:0}});
			smarquee.init();
	        AOS.init();
	        setInterval(function(){
					var xhttp = new XMLHttpRequest();
					xhttp.onload = function() {
						var newText = "";
					    if (this.status == 200) {
					      	data = JSON.parse(this.responseText);
					      	if(data.activestreams!==1)newText = "Radio Offline";
					      	else{
					      		newText = data.streams[0].songtitle;
					      		if(newText==="")newText = "Radio Online";
					      	}
					    }else{
					    	newText = "Radio Offline";
					    }
					    if(marqueeText!==newText){
					    	smarquee.updateText(newText);
					    	marqueeText = newText;
					    }
					};
					xhttp.open("GET", radioStats, true);
					xhttp.send();
	        	},2000);
	        	if ('serviceWorker' in navigator) {
	         	navigator.serviceWorker.register('<?php echo get_template_directory_uri(); ?>/app/service-worker.js')
	              .then((reg) => {
	                console.log('Service worker registered.', reg);
	              });}
	        });
	      
	</script>
	</body>
</html>
