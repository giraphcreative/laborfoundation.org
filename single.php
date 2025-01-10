<?php
/**
 * The Template for displaying all single posts
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
		?>
	<div class="content-wide article <?php print get_field( 'theme' ) ?>" role="main">
		<h1 class="post-title"><?php the_title(); ?></h1>
		<p class="post-date">Posted: <?php the_date(); ?></p>
		<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php the_content(); ?>
	</div>
		<?php
	endwhile;
endif;

the_components();

get_footer();

?>