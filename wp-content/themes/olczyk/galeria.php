<?php get_header(); ?>

	<div id="main-content" class="width1 page page_<?php the_ID(); ?>">
		<div class="box clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="headCont">
					<div class="left">
						<h1><?php the_title(); ?></h1>
						<span class="gnu">
							<?php the_field('opis_head_'.qtrans_getLanguage()); ?>
						</span>
					</div>
				</div>
				<h2><?php the_field('subtitle_'.qtrans_getLanguage()); ?></h2>
				<br />
				
				
				<?php  
					$args = array(
					   'post_type' => 'attachment',
					   'numberposts' => -1,
					   'post_status' => null,
					   'post_parent' => $post->ID
					  );
				
				  $attachments = get_posts( $args );
				     if ( $attachments ) {
				        $i=1; foreach ( $attachments as $attachment ) {
				        	$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'full' );
							if ( $i%5 ) {
							 echo '<div class="fotoBox left centerP">';
							} else {
								echo '<div class="fotoBox left centerP last">';
							}
								echo '<a href="'.$image_attributes[0].'" title="'.apply_filters('the_title', $attachment->post_title).'">';
									echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
								echo '</a>';
								echo '<h6>';
									echo apply_filters('the_title', $attachment->post_title);
								echo '</h6>';
								echo apply_filters('the_excerpt', $attachment->post_excerpt);
								//echo apply_filters('the_content', $attachment->post_content);
							echo '</div>';
							if ( !($i%5) ) {
							 echo '<br class="clear" />';
							}
							$i++;
				          }
				     }
				?>
				
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
		</div>
	</div><!-- end main-content -->
	
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
