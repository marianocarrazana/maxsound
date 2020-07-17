<!-- sidebar -->
<aside id="sidebar" role="complementary">
		<?php sidebar_nav(); ?>
</aside>
<div id="close_sidebarmenu" onclick="closeSideMenu()"></div>
<!-- /sidebar -->
<script type="text/javascript">
function showSideMenu(){
	document.getElementById("sidebar").className = "active";
	document.getElementById("close_sidebarmenu").className = "active";
}
function closeSideMenu(){
	document.getElementById("sidebar").className = "";
	document.getElementById("close_sidebarmenu").className = "";
}
</script>