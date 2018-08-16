<?php
/*
Template Name: galeria lista - kategorii
*/
?>
<?php get_header(); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="headCont">
			    	<div id="gallery-nav" class="right gnu">
						<?php wp_nav_menu(array('theme_location' => 'gallery')); ?>
					</div><!-- end head-nav -->
					<div class="left">
						<h1><?php the_title(); ?></h1>
						<span class="gnu">
							<?php the_field('opis_head_'.qtrans_getLanguage()); ?>
						</span>
					</div>	
				</div>
				
				<h2><?php the_field('subtitle_'.qtrans_getLanguage()); ?></h2>
					
				<ul id="homeNav2" class="centerP listPage" style="margin: 0 auto;overflow: hidden;">	
					<?php
						$mypages = get_pages( array( 
								'child_of' => $post->ID,
								'hierarchical' => 1, 
								'sort_column' => 'post_title', 
								'sort_order' => 'ASC' ) );
						$i = 1;
						foreach( $mypages as $page ) {		
							$content = $page->post_content;
							if ( ! $content ) // Check for empty page
								continue;
							$content = apply_filters( 'the_content', $content );
						?>
							<?php if($page->post_parent==$post->ID){ ?>
								<li>
									<a href="<?php echo get_page_link( $page->ID ); ?>" title="<?php echo $page->post_title; ?>">
										<?php if(get_the_post_thumbnail($page->ID, 'boxNews-small')== true): ?>
											<?php echo get_the_post_thumbnail($page->ID, 'boxNews-small'); ?>
										<?php else: ?>
												<img height="75" src="<?php echo bloginfo('template_directory')?>/images/other/default-img.jpg" alt="" />
										<?php endif; ?>
										<br />
										<?php echo $page->post_title; ?>
										<br />
										<span style="font-size: 12px; text-transform: none;font-family: Times New Roman; color: #444;">
											<?php echo get_field('opis_head_'.qtrans_getLanguage(), $page->ID); ?>
										</span>
									</a>
								</li>
								<?php echo $i%5 ? '':'<li class="clear"></li>'?> 
							<?php }; $i++;?> 
					<?php } ?> 
				</ul>

				
				<script type="text/javascript">
					$(document).ready(function() {
						
						$('#homeNav a, #homeNav2 a').hover(function() {
						    $(this).removeClass('activeOut');
						}, function() {
						    $(this).addClass('activeOut');
						});
					});
				</script>
				
				<br class="clear"/>
				<?php the_content('Czytaj dalej...'); ?>
				<br class="clear"/>
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
