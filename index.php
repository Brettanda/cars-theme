<?php get_header(); ?>
		<main>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><span id="date"><?php the_date(); ?> at <?php the_time(); ?></span> by <span><?php the_author_posts_link(); ?></span></p>
					</header>
					<div><?php the_excerpt(); ?>
						<a class="readmore" href="<?php the_permalink(); ?>">--Read More--</a>
						<hr>
					</div>
				</article>
			<?php endwhile; endif; ?>
	</main>
<?php get_footer();?>
