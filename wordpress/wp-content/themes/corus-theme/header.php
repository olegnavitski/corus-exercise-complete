<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<?php wp_enqueue_style( 'customcss', get_template_directory_uri() . '/style.css',false,'1.1','all'); ?>
	<?php wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/components/slick-slider/slick.css',false,'1.1','all'); ?>
	<?php wp_enqueue_style( 'slickslidercss', get_template_directory_uri() . '//components/slick-slider/slick-theme.css',false,'1.1','all'); ?>
	<?php wp_enqueue_script( 'jqueryslider', '//code.jquery.com/jquery-1.11.0.min.js', array ( 'jquery' ), '1.11.0', true); ?>
	<?php wp_enqueue_script( 'jquerymigrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array ( 'jquery' ), '1.2.1', true); ?>
	<?php wp_enqueue_script( 'sliderscript', get_template_directory_uri() . '/components/slick-slider/slick.min.js', array ( 'jquery' ), '1.1', true); ?>
	<?php wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/js.js', 'sliderscript' , '1.1', true); ?>

	<?php wp_head(); ?>
</head>
<body>
	<section id="content" class="blue">
		<div class="slider">
			<div class="your-class">
			
				<?php
				//Slider

					$args = array(
						'post_type'        => 'corus_gallery',
						'posts_per_page'   => 3,
						'category'         => '',
					);
					$query = new WP_Query( $args ); 
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							$id = get_the_ID();
							$images = get_fields($id);
							foreach ($images as $image) { 
				?>
						
				<div><img src="<?php echo $image; ?>"></div>
							
				<?php		
						}
					} // end while
				}
				wp_reset_query();
				
				?>

			</div>	
		</div>		
	</section>