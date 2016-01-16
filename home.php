<?php get_header(); ?>
	<div id="stage">
		<header>
			<?php get_template_part( 'views/header' ); ?>
		</header>
		<section id="home-hero">
			<div class="inner MT1" class="block">
				<div class="sticker stick-top-25 stick-left-50">
					<h3>Hi. I’m James,<br />
						a <strong>professional counselor</strong>.<br />
						I help people find their identity.
					</h3>
				</div>
				<a href="#" class="button blue sticker stick-right-25 stick-bottom-25">Live Again</a>
				<img class="sticker stick-left-10 stick-bottom" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/james-speaking-green-sweater.png'; ?>" />
				<img class="sticker stick-right-10 stick-bottom" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/jumbo-logo-bg.png'; ?>" />
			</div>
		</section>
		<section id="home-forget-tomorrow" class="cushion-top-5">
			<div class="inner align-center">
				<h2>Forget Tomorrow&trade;</h2>
				<p>Lost identity creates unwanted cycles. When you notice that you’re repeating the same mistakes, it’s time to forget about tomorrow and face what happened in your past.</p>
				<a class="button see-through white">Face Fear</a>
			</div>
		</section>
		<section id="home-conference">
			<div class="W50 L cushion-left-5 cushion-right-10 cushion-top-5">
				<h1>Listen<br />To<br />Your<br />Life</h1>
				<h4>Conference</h4>
				<span class="divider"></span>
				<h2 class="compact">May 7th 2016</h2>
				<h4>Saturday 9AM-4PM</h4>
				<span class="divider"></span>
				<p>Overflow Cafe (Auditorium)<br />1550 S State St • Chicago, IL </p>
				<a class="button white">Learn More</a>
			</div>
			<div class="W50 L cushion-left-5 cushion-right-10 cushion-top-10 align-right">
				<h3>"Life is lived forward, but best understood looking backward. Forget tomorrow and live today!"</h3>
			</div>
		</section>
		<footer>
			<div class="W50 L cushion-left-5">
				<p>&copy; 2016 James Perkins. All Rights Reserved.</p>
			</div>
			<div class="W50 L align-right cushion-right-10">
				<p>Branded by Battle Branding</p>
			</div>
		</footer>
	</div>
<?php get_footer(); ?>
