<?php get_header(); ?>
	<?php if(have_posts()) : ?>
		<h2>Wyniki wyszukiwania frazy <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; echo('<span class="kunci">'); echo $key; echo('</span>'); echo(' - wpisów: '); echo $count . ' '; wp_reset_query(); ?></h2>
		<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h3>
				Kategoria: <?php the_category(', ') ?> - <?php the_time('j F Y'); ?> - <?php comments_number('Brak komentarzy', '1 komentarz', 'Komentarzy: %'); ?></li>
			<?php endwhile; ?>
		</ul>
		<div class="page-nav">
			<span class="older">
				<?php next_posts_link('&laquo; Starsze wpisy') ?>
			</span>
			<span class="newer">
				<?php previous_posts_link('Nowsze wpisy &raquo;') ?>
			</span>
			<div class="clear"></div>
		</div><!-- end page-nav -->
	<?php else : ?>
		<h2>Nie znaleziono wpisów. Spróbować szukać inną frazę?</h2>
		<?php get_search_form(); ?>
	<?php endif; ?>

<?php get_footer(); ?>