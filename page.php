<?php get_header(); ?>
<style>
	
</style>
	<div class="slide-show">
		
	</div>
<main>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<article>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div><?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer();?>