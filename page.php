<div class="wrap container page" role="document">
	<header><img src="/assets/img/people.blur.jpg"/></header>
	<div class="inner">
		<div class="content">
		  <main class="main <?php echo roots_main_class(); ?>" role="main">
		    <?php while (have_posts()) : the_post(); ?>
		      <?php get_template_part('templates/page', 'header'); ?>
		      <?php get_template_part('templates/content', 'page'); ?>
		    <?php endwhile; ?>
		  </main><!-- /.main -->
		</div><!-- /.content -->
	</div>
</div><!-- /.wrap -->



