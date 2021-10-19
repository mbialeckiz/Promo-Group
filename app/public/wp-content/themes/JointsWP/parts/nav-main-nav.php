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
					<!-- mobile menu -->
					<button type="button" class="nav__toggle nav__toggle--open js-menu-trigger" aria-label="Menu" data-target=".js-menu" data-action="open">
         				<span class="burger cross nav__toggle nav__toggle--close js-menu-trigger" aria-label="Menu" data-target=".js-menu" data-action="open">
							 <span class="middle"></span>
						</span>
					</button>

					<div class="main-navigation__mobile--js main-navigation__mobile hide-for-large float-right">
						<button type="button" data-toggle="mobile-dropdown">
						<i class="fa fa-bars">
							<span>Menu</span>
						</i>
						</button>
					</div>

					<div class="dropdown-pane" id="mobile-dropdown" data-responsive-menu="accordion medium-dropdown" data-dropdown>

						<?php mobile_menu(); ?> 

					</div>

					<!-- desktop menu -->
					<?php
						$args = [
						'theme_location'  =>  'main-menu',
						'menu'            =>  'Main Menu',
						'container'       =>  'div',
						'container_class' =>  'main-navigation__wrapper show-for-large',
						'container_id'    =>  'main-navigation',
						'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class'      =>  'main-navigation__itemswrapper',
						'depth'           =>  0,
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