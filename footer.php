	<section class="clear"></section>

	<!-- Footer -->
		<footer id="footer">	
			<section class="footer-widgets-container">
				<section class="footer-widgets">
					<?php sds_footer_sidebar(); // Footer (4 columns) ?>
				</section>
			</section>

			<nav>
				<?php
					// Footer Navigation Area
					if( has_nav_menu( 'footer_nav' ) )
						wp_nav_menu( array(
							'theme_location' => 'footer_nav',
							'container' => false,
							'menu_class' => 'footer-nav menu',
							'menu_id' => 'footer-nav',
						) );
				?>
			</nav>

			<section class="copyright-area">
				<?php sds_copyright_area_sidebar(); ?>
			</section>

			<p class="copyright">
				<?php sds_copyright( 'Epic' ); ?>
			</p>
		</footer>

		<?php wp_footer(); ?>
<?php
// Adam Lukaszczyk: poniżej dodałem kod do integracji z Evenea 
?>
<script type="text/javascript" src="https://evenea.pl/js/iframe/new/iframeResizer2.js"></script>
	</body>
</html>