<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x container">
						
						<div class="small-12 medium-12 large-6 cell">
							<nav role="navigation" class="upper-footer__navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>

						<div class="small-12 medium-12 large-6 cell">
							<div class="upper-footer__contact">
	    						<p>Kontakt oss:</p>
								<a href="tel:41269359">41 26 93 59</a>
								<span>&#183;</span>
								<a href="mailto:barbara@promogroup.no">barbara@promogroup.no</a>
							</div>
	    				</div>

						<div class="footer__divider">

						</div>
						
						<div class="small-12 medium-12 large-4 cell">
							<p class="source-org copyright lower-footer__copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
						<div class="lower-footer__logoholder small-12 medium-12 large-4 cell">
							<a href="<?php echo esc_url(home_url()); ?>" rel="home" class="lower-footer__logo" title="Promo Group AS">
								Promo <span class="lower-footer__logo-span">Group</span> AS
							</a>
						</div>
						<div class="small-12 medium-12 large-4 cell lower-footer__linkholder">
							<a href="/personvern/" rel="home" class="footer__link" title="Personvernerklæring">
								Personvernerklæring
							</a>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->