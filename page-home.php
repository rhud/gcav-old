<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap hero" role="document">
	<div id="slider" class="main" data-stellar-ratio="0.3">
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
	<section class="services">
		<div class="inner">
			<div class="blurb">
				<h1>Our Services</h1>
				<h3>Gold Class Audio Visial offer an extensive range of services including...<br>
					Everything we offer lives up to our name.</h3>
			</div>
			
			<?php
			$type = 'services';
			$args = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => -1, 'caller_get_posts'=> 1, 'order' => 'ASC');
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			    <div class="service col-xs-6 col-sm-4 col-md-3 col-lg-2">
			    	<?= types_render_field("icon", array("raw"=>"true"))?>
			    	<h3><?php the_title(); ?></h3>
			    </div>
			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
			
			<div class="clearfix"></div>
			<h2><a href="/services">View All Services</a></h2>
		</div>
	</section>
	<section class="solutions">
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
	</section>
	
	<section class="brands" data-stellar-background-ratio="0.3" data-stellar-vertical-offset="0">
		<div class="inner">
			<h1>Brands</h1>
			<h3>We only deal with products that we believe are quality and value for money.<br/>
			I really am simply making up text here. You guys can come up with something.</h3>
			<p>
				<img src="/assets/img/logos/logo.acrs.png"/>
				<img src="/assets/img/logos/logo.cedia.png"/>
				<img src="/assets/img/logos/logo.dlink.png"/>
				<img src="/assets/img/logos/logo.epson.png"/>
				<img src="/assets/img/logos/logo.kordz.png"/>
				<img src="/assets/img/logos/logo.kramer.png"/>
				<img src="/assets/img/logos/logo.marantz.png"/>
			</p>
			<p>
				<img src="/assets/img/logos/logo.nuvo.png"/>
				<img src="/assets/img/logos/logo.rti.png"/>
				<img src="/assets/img/logos/logo.samsung.png"/>
				<img src="/assets/img/logos/logo.sanus.png"/>
				<img src="/assets/img/logos/logo.sonance.png"/>
				<img src="/assets/img/logos/logo.st.png"/>
			</p>
		</div>
	</section>
		
	<section class="contact">
		<div class="inner">
			<h1>Contact Us</h1>
			<div class="col-sm-4 details">
				<p>07 4630 4433 <i class="icon-phone"></i></p>
				<p><a href="mailto:info@goldclassav.com.au">info@goldclassav.com.au</a> <i class="icon-mail"></i></p>
				<p>PO Box 18259 <i class="icon-location"></i></p>
				<p>Clifford Gardens <i class="icon-location dark"></i></p>
				<p>Toowoomba QLD 4350 <i class="icon-location dark"></i></p>
				
			</div>
			<div class="col-sm-7 form">
				<?php echo do_shortcode("[contact-form-7 id='4' title='Home Contact']"); ?>
			</div>
			<div class="col-sm-1"></div>
			<div class="clearfix"></div>
		</div>
	</section>
	
</div>




	




