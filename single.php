<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tc_zippo_s
 */

get_header();
?>

<div class="l-inner -campaign">
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
				<div class="p-kv">
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri() ?>" alt="">
					<?php endif; ?>
					<p class="p-kv__title"></p>
				</div>
			</section>

			<section class="l-post">
				<div class="p-post">
					<h1 class="p-post__h1"><?php the_title(); ?></h1>
					<div class="p-post__text p-post__h2 p-post__h3 p-post__lists p-post__list"><?php the_content(); ?></div>
				</div>
			</section>

		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
