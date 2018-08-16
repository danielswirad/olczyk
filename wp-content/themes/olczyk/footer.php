<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

			</div><!-- end #main-content -->
		</div><!-- end .container -->
		<div class="clear"></div>	
		<div id="footer">
				
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
			<?php endif; ?>
				
			<a href="http://woopem.pl" target="_blank" title="Strony internetowe Opole | Wrocław">
				powered by: woopem
			</a>
		</div><!-- end #foot -->
	</div><!-- end #wrapper -->

	<?php wp_footer(); ?>

</body>
</html>