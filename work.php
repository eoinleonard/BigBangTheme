<?php

/*

	Template Name: Work Page

*/

get_header(); ?>

this is work.php

<?php if (  have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<hr>

	<?php endwhile; else: ?>

	<p>no posts yet</p>

	<?php endif; ?>

<?php get_footer(); ?>