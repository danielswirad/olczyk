<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archiwum kategorii &#8216;<?php single_cat_title(); ?>&#8217;</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Wpisy oznaczone &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archiwum dnia <?php the_time('j F Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archiwum miesiąca <?php the_time('F Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archiwum roku <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Wpisy autora</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Archiwum bloga</h2>
 	  <?php } ?>
<ul>
<?php while(have_posts()) : the_post(); ?>
<li><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
Kategoria: <?php the_category(', ') ?> - <?php the_time('j F Y'); ?> - <?php comments_number('Brak komentarzy', '1 komentarz', 'Komentarzy: %'); ?></li>
<?php endwhile; ?>
</ul>
<div class="page-nav">
<span class="older"><?php next_posts_link('&laquo; Starsze wpisy') ?></span><span class="newer"><?php previous_posts_link('Nowsze wpisy &raquo;') ?></span>
<div class="clear"></div>
</div><!-- end page-nav -->
<?php else : ?>
		<?php if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Niestety, w kategorii %s nie ma jeszcze żadnych wpisów.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Niestety, nie znaleziono żadnych wpisów z tej daty.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Niestety, %s nie opublikował(a) jeszcze żadnych wpisów.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Nie znaleziono wpisów.</h2>");
		}
<?php endif; ?>
<?php get_footer(); ?>