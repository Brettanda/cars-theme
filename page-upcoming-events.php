<?php get_header(); ?>
	</header>
		<div class="main">
			<main class="events">
				<?php	$args = array('post_type' => 'upcoming-events');
					$loop = new WP_Query( $args );
					$values = get_post_meta('event'); 
				 if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
					<a class="event" href="<?php the_permalink(); ?>"><article>
						<header class="event-header">
							<h1><?php the_title(); ?></h1>
	                        <p><span id="date"><?php the_date(); ?></p>
						</header>
						<div><?php print_r($values); ?></div>
					</article></a>
				<?php endwhile; endif; ?>
		</main>
<?php get_footer();?>
