<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="container" id="top-bar-menu">
	<div class="site-header__body">
		<div class="site-header__logoholder">
			<a href="<?php echo esc_url(home_url()); ?>" rel="home" 
			class="site-header__title" title="Promo Group AS">
			Promo <span class="site-header__title-span">Group</span> AS</a>
		</div>

		<div class="site-header__nav-holder">
			<div class="title-bar" data-responsive-toggle="main-navigation" data-hide-for="large">
				<button class="menu-icon" type="button" data-toggle="main-navigation"></button>
				<div class="title-bar-title"></div>
			</div>

			<div class="top-bar" id="main-navigation">
				<nav class="main-navigation vertical menu nav" id="mobile-dropdown" data-dropdown-menu>
					<?php joints_top_nav(); ?>
					<a href="/for-jobbsokere/" type="button" class="button site-header__cta " data-toggle="modal" data-target="kontakt-oss">
						Registrer din CV
					</a>
				</nav>
			</div>
		</div>
	</div>
</div>