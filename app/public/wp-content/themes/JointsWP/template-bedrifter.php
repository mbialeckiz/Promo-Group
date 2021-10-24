<?php
/*
Template Name: Bedrifter
*/

get_header(); ?>

	<main class="main">
	
		<!-- Hero Image Alt -->

        <?php get_template_part( 'parts/hero' ); ?>

        <!-- END Hero Image Alt -->

        
        <section class="gradient">
            <!-- Block Hva tilbyr Promo -->

                <?php get_template_part( 'parts/tilbudpromo' ); ?>

            <!-- End Block Hva tilbyr Promo -->
    
        
            <!-- Block VÅRE FAGOMRÅDER -->

                <?php get_template_part( 'parts/fagomraader' ); ?>

            <!-- END Block VÅRE FAGOMRÅDER -->

        </section> <!-- END Section Gradient -->



	
    </main> <!-- end Main -->

<?php get_footer(); ?>
