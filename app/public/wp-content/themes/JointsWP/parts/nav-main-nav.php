<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = 'medium'; ?>

	<div class="container">
		<div class="site-header__body">
			<div class="site-header__logoholder">
				<a href="<?php echo esc_url(home_url()); ?>" rel="home" class="site-header__title" title="Promo Group AS">
					Promo <span class="site-header__title-span">Group</span> AS
				</a>
			</div>

			<div class="site-header__nav-holder">
				<button type="button" data-toggle="mobile-dropdown" class="hamburger hamburger--js">
					<i class="fa fa-bars">
						<span style="color: white;">Menu</span>
					</i>
				</button>

				<nav id="site-navigation" class="main-navigation main-navigation--js" role="navigation">

					<!-- desktop menu -->
					<?php
					$args = [
						'theme_location' => 'main-menu',
						'menu' => 'Main Menu',
						'container' => 'div',
						'container_class' => 'main-navigation__wrapper',
						'container_id' => 'main-navigation',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class' => 'main-navigation__itemswrapper',
						'depth' => 0,
						'fallback_cb' => 'wp_page_menu',
					];
					wp_nav_menu($args);
					?>
				</nav>
			</div>

			<div class="site-header__cta">
				<a href="#form" type="button" class="button site-header__cta-link" data-toggle="modal" data-target="#form....">
					Registrer din CV
				</a>
			</div>
		</div>
	</div>