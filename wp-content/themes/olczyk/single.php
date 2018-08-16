<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="headCont">
			<div class="left">
				<?php if(has_post_thumbnail()): ?>
					<?php 
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					?>
					<a href="<?php echo $large_image_url[0] ?>" class="left fancybox fancyboxImg" rel="fancybox">
						<?php the_post_thumbnail('boxNews-small'); ?>
					</a>
				<?php else: ?>
					<span class="left fancyboxImg">
						<img height="75" src="<?php echo bloginfo('template_directory')?>/images/other/default-news.png" alt="" />
					</span>
				<?php endif; ?>
			</div>
			<div class="left">
				<h1><?php the_title(); ?></h1>
				<span class="gnu">
					<?php the_time('j F Y') ?>,<br />
					<?php the_field('opis_head_'.qtrans_getLanguage()); ?>
				</span>
			</div>
		</div>
		<?php the_content(); ?>
		
		<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Strony:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
		
		<div id="nav-below" class="gnu">
			<div class="left">
				<?php previous_post_link( '%link', '&laquo; '.__('poprzedni news', 'olczyk')) ?></div>
			<div class="right">
				<?php next_post_link( '%link', __('nastepny news', 'olczyk' ).' &raquo;'); ?></div>
		</div>
		
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
<?php get_footer(); ?>