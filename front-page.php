<?php get_header(); ?>

<style>
.site-header{
	min-height: 90vh;
}	
</style>
	<div class="slide-show">
		<img src="http://lorempixel.com/1920/1080/cats"/>
	</div>
</header>
<div class="main">
<main>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="section">
			<header class="section-header">
				<h1 class="section-header__title"><?php the_title(); ?></h1>
			</header>
			<div class="section-content"><?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
