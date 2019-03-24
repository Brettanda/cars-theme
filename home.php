<?php get_header(); ?>
<style>
	
</style>
</header>
<div class="main">
<main>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="section">
			<header>
				<h1 class="section-header__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<div class="section-content"><?php the_excerpt(); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
