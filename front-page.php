<?php get_header(); ?>
<style>
	
</style>
	<div class="slide-show">
		
	</div>
<main>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="section">
			<header class="section-header">
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="section-content"><?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>
</main>
<?php get_footer();?>