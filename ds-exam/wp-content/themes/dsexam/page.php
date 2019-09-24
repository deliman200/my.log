<?php
@session_start();
get_includes('head');
?>
	<?php get_includes('nav'); ?>
	<?php get_includes('banner'); ?>

	<!-- main -->
	<div class="feature">
		<div class="container">
			<h1>Featured Tours</h1>
			<p>Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</p>

			<ul class="list-none">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/f1.jpg" alt ="feature image resort 1" width="250" class="img-fluid"/> <br/>
					<strong>Kamalame Cay Resort</strong> <br/><small>Kamalame Cay, The Bahamas</small>
					<a class="nav-link btn btn-cdomains" href="kamalame-cay-resort"><i class="fa fa-paper-plane"></i> READ MORE</a>
				</li>

				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/f2.jpg" alt ="feature image resort 2"/ width="250" class="img-fluid"> <br/>
					<strong>Kamalame Cay Resort</strong> <br/><small>Kamalame Cay, The Bahamas</small>
					<a class="nav-link btn btn-cdomains" href="#"><i class="fa fa-paper-plane"></i> READ MORE</a>
				</li>

				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/f3.jpg" alt ="feature image resort 3" width="250" class="img-fluid"/> <br/>
					<strong>Kamalame Cay Resort</strong> <br/><small>Kamalame Cay, The Bahamas</small>
					<a class="nav-link btn btn-cdomains" href="#"><i class="fa fa-paper-plane"></i> READ MORE</a>
				</li>

				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/f4.jpg" alt ="feature image resort 4" width="250" class="img-fluid"/> <br/>
					<strong>Kamalame Cay Resort</strong> <br/><small>Kamalame Cay, The Bahamas</small>
					<a class="nav-link btn btn-cdomains" href="#"><i class="fa fa-paper-plane"></i> READ MORE</a>
				</li>
			</ul>
		</div>
	</div>

	<?php get_includes('mid'); ?>
	<?php get_includes('bottom'); ?>
<?php get_includes('footer'); ?>



