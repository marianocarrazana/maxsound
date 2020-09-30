<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/frow@3/dist/frow.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/app/manifest.json" />
  		<script src="https://unpkg.com/scrollreveal"></script>
  		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <style type="text/css" media="screen">
        	#header,#loader-header{
				background-color: #223;
				background-image: linear-gradient(311deg, #21D4FD 0%, #B721FF 50%, #ff0000 100%);
			}
        </style>
        
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<div id="fake-header" class="opacity-0 <?php if (!is_home()){ echo "fixed-size"; } ?>"></div>
			<!-- header -->

			<header data-tilt data-tilt-max="2" data-tilt-speed="2" data-tilt-perspective="1200" data-tilt-full-page-listening id="header" style="background-image: url(<?php header_image(); ?>)" class="frow row-between <?php if (!is_home()){ echo "fixed-size"; } ?>" role="banner">
					<nav class="col-xs-1-6">
						<button onclick="showSideMenu()" class="jam jam-menu visible-sm hidden-lg"></button>

					</nav>
					<!-- logo -->
					<div class="logo col-xs-4-6">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<div class="logo-img">
								<?php if(has_custom_logo()){ 
									$custom_logo_id = get_theme_mod( 'custom_logo' );
        							$logo_meta = wp_get_attachment_image_src($custom_logo_id,'full');
       						 ?>
								<img id="custom-logo" alt="<?php echo get_bloginfo('title'); ?>" src="<?php echo $logo_meta[0]; ?>">
							<?php }else{ ?>
								 <img id="custom-logo" alt="<?php echo get_bloginfo('title'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
							<?php } ?>
							</div>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav role="navigation" class="col-xs-1-6" style="align-self: flex-start;">
						
						<button class="jam jam-menu visible-sm hidden-lg opacity-0"></button>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
			<div class="visible-lg hidden-xs hidden-sm hidden-md" id="nav">
							<?php html5blank_nav(); ?></div>
			<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/app/index.html" id="marquee">
				<div><i class="jam jam-play"></i></div>
			<div id="smarquee">Cargando...</div></a>
			<?php if (is_home()){ ?>
				<header id="loader-header" style="background-image: url(<?php header_image(); ?>)" class="frow row-between <?php if (!is_home()){ echo "fixed-size"; } ?>">
					<div class="loader"></div>
				</header><!-- /header -->
<script type="text/javascript">
	var header = document.getElementById("header");
	window.onscroll = updateSizeHeader;
	window.onresize = updateSizeHeader;
	document.body.onload = function(){
		document.getElementById("loader-header").className = "hide";
		setTimeout(function(){document.getElementById("loader-header").style.display="none"},1000);
	};
	var fake_header = document.getElementById("fake-header");
	function updateSizeHeader() {
		var headerHeight = fake_header.clientHeight;
		var height = headerHeight - window.scrollY;
		if(height>68)header.style.height = height + "px";
		else header.style.height = "68px";
		document.getElementById("custom-logo").style.maxHeight = header.style.height;
	};
	updateSizeHeader();
</script><?php } ?>
<div><div class="frow row-between" id="radio_buttons">
	<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/app/index.html">Escuchanos online!</a>
	<div>|</div>
	<a href="<?php echo get_theme_mod( 'radio_app_url' ); ?>">Instala nuestra app!</a>
</div></div>
