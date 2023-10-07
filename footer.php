<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tc_zippo_s
 */

?>

		<footer class="l-footer">
			<div class="l-inner p-footer">
				<div class="l-footer__head">
					<div class="p-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="footer-logo"></div>
				</div>
				<div class="l-footer__body">
					<div class="p-footer__address">
						<p class="p-footer__copyright">© ジッポマニア</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
		<script>new WOW().init();</script>

		<?php wp_footer(); ?>

	</body>
</html>
