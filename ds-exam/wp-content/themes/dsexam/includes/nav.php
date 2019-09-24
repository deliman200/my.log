<nav class="navbar navbar-expand-sm bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand float-left" href="#">
	    	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo" class="img-fluid">
	  	</a>
	  <!-- Links -->
	  <ul class="navbar-nav float-right">
	    <li class="nav-item">
	      <a class="nav-link" href="tel:12345657"><i class="fa fa-phone"></i> <?php dynamic_sidebar( 'contact-info' ); ?></a>
	    </li>
	    <li class="nav-item clearfix  mt-2">
	      <span class="text-white">|</span>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="mailto:mail@crazydomains.com"><i class="fa fa-envelope"></i> <?php dynamic_sidebar( 'email-info' ); ?></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link btn btn-cdomains" href="#"><i class="fa fa-paper-plane" data-toggle="modal" data-target="#contactModal"></i> Book Now</a>
	    </li>
	  </ul>
	</div>
</nav>
