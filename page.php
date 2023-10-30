<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ruggedrobotics
 */

get_header(); ?>

	<?php if( have_rows('content') ): ?>
	    <?php while( have_rows('content') ): the_row();
	      get_template_part( 'template-parts/pages/flex', get_row_layout());
	     ?>
	      <?php endwhile; ?>
     <?php endif; ?>

<?php
get_footer();
