<?php
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php
$favicon = $olczyk_favicon;
echo '<link rel="shortcut icon" href="';
	if (!empty($favicon)) {
		echo "$favicon";
	} else {
		echo bloginfo('template_directory').'/favicon.png';
	}
echo '" />';
?>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
		<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="container">
				<div class="logo alignright gnu">
					<a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('name'); ?>">
						<?php //bloginfo('name'); ?>
						<span>andrzej &nbsp;<span>olczyk</span></span>
					</a>
				</div>
				<br />
				<?php //echo qtrans_generateLanguageSelectCode() ?>
			
			</div>
		</div><!-- end header -->
		<div class="container">
			<?php get_sidebar(); ?>
			<script type="text/javascript">
				$(document).ready(function() {
					$('.current-page-ancestor').parent('.sub-menu').addClass('currentP');
				});
			</script>
			<div id="main-content">