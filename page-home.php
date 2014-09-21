<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap hero" role="document">
	<div id="slider" class="main">
		<?php
		$type = 'solutions';
		$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post(); ?>
		    <div class="slide">
		    	<img class="bg" src="<?=types_render_field("hero-img", array("raw"=>"true"))?>" />
		    	<div class="element el1 from-right"><h2><span>imagine if...</span></h2></div>
		    	<div class="element el2 from-left"><h2><span><?=types_render_field("hero-msg", array("separator"=>"</span> <br/><span>"))?></span></h2></div>
		    </div>
		    
		   	<?php
		  endwhile;
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
		?>
		
	</div>
</div>

<div class="wrap home-content">
	<div class="downdown"></div>
	<div class="gcanim"></div>
	
	<section class="solutions">
		<div class="twinkling">
			<div class="inner">
				<h1>Solutions</h1>
				
				<?php
				$type = 'solutions';
				$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1);
				$my_query = null;
				$my_query = new WP_Query($args);
				$count = 1;
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <div class="col-md-6 col-sm-6 col-lg-3">
				    	<div class="solution">
				    		<img src="<?=types_render_field("solution-img", array("raw"=>"true"))?>"/>
				    		<div class="desc">
				    			<h2><?php the_title(); ?></h2>
				    			<p><?php the_excerpt(); ?> </p>
				    			<a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Read More</a>
				    		</div>
				    	</div>
				   	</div>
				   	<?php
				   	if($count == 2) {
				   		?>
				   		<div class="clearfix visible-md visible-sm"></div>
				   	<?php
				   	}
				   	$count++;
				    	
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</section>



	




