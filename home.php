<?php get_header(); ?>


<div class="blog-contain">
<?php if (  have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	</article>
	<hr>

	<?php endwhile; else: ?>

	<p>no posts yet</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>