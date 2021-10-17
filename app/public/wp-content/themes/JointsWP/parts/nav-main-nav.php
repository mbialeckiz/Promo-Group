<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

	<div class="container">
		<div class="site-header__body">
			<div class="site-header__logoholder">
				<a href="<?php echo esc_url( home_url() ) ;?>" rel="home" class="site-header__title" title="Promo Group AS">
					Promo <span class="site-header__title-span">Group</span> AS
				</a>
			</div>

			<div class="site-header__nav-holder">
				<nav id="site-navigation" class="main-navigation js-main-navigation" role="navigation">
					<div class="hamburger hamburger--js hide-for-large float-right" aria-label="Åpen meny">
						<button type="button" data-toggle="mobile-dropdown">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<?php
						$args = [
						// Location pickable in Customizer
						'theme_location'  =>  'main-menu',
						// Assigns a default menu to location
						'menu'            =>  'Main Menu',
						// Main wrapper around the ul of posts
						'container'       =>  'div',
						'container_class' =>  'main-navigation__wrapper',
						'container_id'    =>  'main-navigation',
						// Wrapper for menu items - defaults to ul
						'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class'      =>  'main-navigation__itemswrapper',
						//'menu_id'         =>  'items-wrap-id',
						// Depth of child nav items to show
						'depth'           =>  0,
						// Callback function if menu is not available
						'fallback_cb'     =>  'wp_page_menu',
						];
						wp_nav_menu( $args );
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