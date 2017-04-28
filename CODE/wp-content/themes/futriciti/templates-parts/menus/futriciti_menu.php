<?php
	$facebook = get_field('facebook', 'options');
	$twitter = get_field('twitter', 'options');
	$instagram = get_field('instagram', 'options');
	$google_plus = get_field('google_plus', 'options');
	$youtube = get_field('youtube', 'options');

	$contact_email = get_field('contact_email', 'options');

	$main_logo = get_field('main_logo', 'options');
	$main_logo_dark = get_field('main_logo_dark', 'options');
	$main_logo_white = get_field('main_logo_white', 'options');
?>
<header id="masthead" class="site-header" role="banner">
	<div class="menu-overlay"></div>

	<div class="container no-padding-left extra-padding-right header-landing-container">
		<div class="row">
			<div class="col-xs-12 no-padding-left">
				<ul class="social-icons hidden-xs">
					<?php if ($facebook): ?>
						<li><a href="<?= $facebook ?>" target="_blank" title="Facebook" class="fa fa-facebook"></a></li>
					<?php endif; ?>
					<?php if ($twitter): ?>
						<li><a href="<?= $twitter ?>" target="_blank" title="Twitter" class="fa fa-twitter"></a></li>
					<?php endif; ?>
					<?php if ($instagram): ?>
						<li><a href="<?= $instagram ?>" target="_blank" title="Instagram" class="fa fa-instagram"></a></li>
					<?php endif; ?>
					<?php if ($google_plus): ?>
						<li><a href="<?= $google_plus ?>" target="_blank" title="G+" class="fa fa-google-plus"></a></li>
					<?php endif; ?>
					<?php if ($youtube): ?>
						<li><a href="<?= $youtube ?>" target="_blank" title="Youtube" class="fa fa-youtube-play"></a></li>
					<?php endif; ?>
					<?php if ($contact_email): ?>
						<li><a href="mailto:<?= $contact_email ?>" target="_top" title="Youtube" class="fa fa-envelope"></a></li>
					<?php endif; ?>
				</ul><!--/.menu-social-icons-->

				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo $main_logo ?>" alt="Main Logo" class="logo-large">
						<img src="<?php echo $main_logo_dark ?>" alt="Main Logo" class="logo-dark">
						<img src="<?php echo $main_logo_white ?>" alt="Main Logo" class="logo-white">
					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'header-menu' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<a href="#" class="btn open-form is-animated"><span>REQUEST A DEMO</span></a>
				</nav><!-- #site-navigation -->

			</div>
		</div>
	</div>

</header><!-- #masthead -->