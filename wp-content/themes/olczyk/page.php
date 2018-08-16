<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="headCont">
			
			<?php if ($post->post_parent == '127' || $post->post_parent == '121') { ?>
			    <div id="gallery-nav" class="right gnu">
					<?php wp_nav_menu(array('theme_location' => 'gallery')); ?>
				</div><!-- end head-nav -->
			 <?php } ?>
			 
			<div class="left">
				<h1><?php the_title(); ?></h1>
				<span class="gnu">
					<?php the_field('opis_head_'.qtrans_getLanguage()); ?>
				</span>
			</div>
		</div>
		<?php if(get_field('subtitle_'.qtrans_getLanguage())) { ?>
			<h2><?php the_field('subtitle_'.qtrans_getLanguage()); ?></h2>
			<br />
		<?php } ?>
		<?php the_content('Czytaj dalej...'); ?>
		<p class="clear rightP"><i>
			<a class="back" syle="text-decoration: none;" href="javascript:history.back();">« <?php echo __('cofnij', 'olczyk'); ?></a>
		</i></p>
		<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Strony:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
	<?php endwhile; else: ?>
		<div class="headCont">
			<div class="left">
				<h1><?php echo __('Błąd strony', 'olczyk'); ?></h1>
				<span class="gnu">
					<?php echo __('Niestety, nie ma tutaj tego, co szukasz.', 'olczyk') ?>
				</span>
			</div>
		</div>
	<?php endif; ?>
	
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
