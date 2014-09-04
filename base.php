<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
 
  <!--[if lt IE 8]>
   <div class="alert alert-warning">
     <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
   </div>
 <![endif]-->
<?php
	get_template_part('templates/header');
?>
<nav role="navigation" class="smartheader">
	<a class="menu-link"><i class="icon-menu"></i></a>
	<?php
		if (has_nav_menu('primary_navigation')) :
		 wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
		endif;
	?>
</nav>
 
<?php include roots_template_path(); ?> 
 
<?php get_template_part('templates/footer'); ?>
 
</body>
</html>