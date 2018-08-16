<?php
/*
Template Name: Lista newsów
*/
?>
<?php get_header(); ?>
	<div class="headCont">
		<div class="left">
			<h1><?php the_title(); ?></h1>
			<span class="gnu">
				<?php the_field('opis_head_'.qtrans_getLanguage()); ?>
			</span>
		</div>	
	</div>
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'posts_per_page' => 5,
	                                       'paged' => $paged,
	                                       'cat'=>'1');
		$myposts = query_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<div class="post clear">
				<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink() ?>" class="left fancyboxImg">
						<?php the_post_thumbnail('boxNews-thumb' ); ?> 
					</a>
				<?php else: ?>
					<a href="<?php the_permalink() ?>" class="left fancyboxImg">
						<img width="200" height="132" src="<?php echo bloginfo('template_directory')?>/images/other/default-news.png" alt="" />
					</a>
				<?php endif; ?>
				<h3>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
						<span><?php the_time('j F Y') ?></span>
						<?php the_title(); ?>
					</a>
				</h3>
				<?php the_excerpt() ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="right">
					<?php echo __('czytaj więcej..', 'olczyk'); ?>
				</a>
			</div>
	<?php endforeach; ?>
	
	<?php echo wp_paginate()?>
	
	
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
