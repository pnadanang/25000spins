<?php 
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>
			<footer id="footer">
				<div class="container">
					<?php get_sidebar( 'footer' ); ?>
					<div class="footer-right">
						<div class="social_footer">
							<?php dynamic_sidebar( 'social-footer' ); ?>
						</div>
						<div class="credits">
							<?php echo et_get_footer_credits();?>
						</div>
					</div>
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>