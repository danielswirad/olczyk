<?php get_header(); ?>

	<?php if(have_posts()) : ?>
		<?php /*
			<div class="headCont">
				<div class="left">
					<h1><?php echo __('Galeria prac..', 'olczyk') ?></h1>
					<span class="gnu">
						moje twórcze życie
					</span>
				</div>	
				<p style="margin-left: 200px">
					Witam na stronie z przeglądem moich najważniejszych i najświeższych prac.
					Serwis ten jest swoista wystawą materiału, którym chciałem się z Wami podzielić.
					Zapraszam do poznania i przeżywania świata widzianego moimi oczami.
					Jeżeli coś poruszy Cię, podziel się swoją refleksją... gorąco zachęcam.
				</p>
				<p class="rightP">
					<em>Andrzej T. Olczyk</em>
				</p>
			</div>
		*/ ?>
		</a>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#imgHome img').hover(function() {
				    $('#homeNav a').removeClass('activeOut');
				    $('#homeNav a').addClass('active');
				}, function() {
				    $('#homeNav a').removeClass('active');
				    $('#homeNav a').addClass('activeOut');
				});
				$('#homeNav a').hover(function() {
				    $(this).removeClass('activeOut');
				}, function() {
				    $(this).addClass('activeOut');
				});
			});
		</script>
		<ul id="homeNav" class="centerP">
			<li>
				<a href="<?php echo get_page_link(6); ?>" class="">
					<img style="vertical-align: bottom;" width="156" height="345" src="<?php echo bloginfo('template_directory')?>/images/bg/home1.jpg" alt="" />
					<strong><?php echo __('Malarstwo', 'olczyk') ?></strong>
				</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(101); ?>" class="">
					<img style="vertical-align: bottom;" width="156" height="345" src="<?php echo bloginfo('template_directory')?>/images/bg/home2.jpg" alt="" />
					<strong><?php echo __('Grafika', 'olczyk') ?></strong>
				</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(138); ?>" class="">
					<img style="vertical-align: bottom;" width="156" height="345" src="<?php echo bloginfo('template_directory')?>/images/bg/home3.jpg" alt="" />
					<strong><?php echo __('Rysunek', 'olczyk') ?></strong>
				</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(1002); ?>" class="">
					<img style="vertical-align: bottom;" width="156" height="345" src="<?php echo bloginfo('template_directory')?>/images/bg/home4.jpg" alt="" />
					<strong>
						<?php echo __('Fotografia', 'olczyk') ?>
					</strong>
				</a>
			</li>
		</ul>				
	<?php else : ?>
		<h2>Ojjj...</h2>
	<?php endif; ?>
	
<?php get_footer(); ?>