<div class="wrap container" role="document">
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
</div><!-- /.wrap -->



