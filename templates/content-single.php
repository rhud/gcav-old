<div class="wrap container page" role="document">
	<header><img src="/assets/img/hero/theater.room.jpg"/></header>
	<div class="inner blog">
		<div class="content">
		  <main class="main <?php echo roots_main_class(); ?>" role="main">
		    <?php while (have_posts()) : the_post(); ?>
		      <?php get_template_part('templates/page', 'header'); ?>
		      <?php get_template_part('templates/content', 'page'); ?>
		    <?php endwhile; ?>
		  </main><!-- /.main -->
		  <?php if (roots_display_sidebar()) : ?>
		    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
		      <?php include roots_sidebar_path(); ?>
		    </aside><!-- /.sidebar -->
		  <?php endif; ?>
		</div><!-- /.content -->
	</div>
</div><!-- /.wrap -->



