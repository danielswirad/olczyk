<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="sidebar">

	<div id="head-nav">
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</div><!-- end head-nav -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
	<?php endif; ?>
</div><!-- end sidebar -->