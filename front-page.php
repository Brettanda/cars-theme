<?php get_header(); ?>

<style>
	.site-header{
		min-height: 90vh;
	}
</style>
	<div class="slide-show">
		<img class="slide-show__img" src="http://pi.brettanda.ca/cars/wordpress/wp-content/uploads/2019/03/CAR-Pic-1.jpg"/>
		<img class="slide-show__img" src="http://pi.brettanda.ca/cars/wordpress/wp-content/uploads/2019/03/CAR-pic-2.jpg"/>
		<img class="slide-show__img" src="http://pi.brettanda.ca/cars/wordpress/wp-content/uploads/2019/03/DSC_1552-5-1.jpg"/>
		<img class="slide-show__img" src="http://pi.brettanda.ca/cars/wordpress/wp-content/uploads/2019/03/C1.jpg"/>
	</div>
</header>
<script>slideshow();</script>
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
