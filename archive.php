<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tc_zippo_s
 */

get_header();
?>

<main class="l-inner -campaign">
	<div class="l-breadcrumbs">
		<?php
			if ( function_exists( 'bcn_display' ) ) {
				bcn_display();
			}
		?>
	</div>

	<?php if(have_posts()) :?>
		<?php while(have_posts()) :?>
			<?php the_post(); ?>
			<section class="l-kv">
        </section>
        <?php echo "archive";?>

        <?php endwhile; ?>
        <?php endif; ?>
      </main>





<?php get_footer(); ?>
