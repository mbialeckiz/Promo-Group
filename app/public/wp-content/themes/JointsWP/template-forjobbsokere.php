<?php
/*
Template Name: For Jobbsøkere
*/

get_header(); ?>

	<main class="main">
	
		<!-- Hero Image Alt -->

        <?php get_template_part( 'parts/hero' ); ?>

        <!-- END Hero Image Alt -->

        
        <section class="gradient">
            <!-- Block Hva tilbyr Promo -->

                <?php get_template_part( 'parts/textblock' ); ?>

            <!-- End Block Hva tilbyr Promo -->
    
            <!-- Block Form Send CV -->

                <?php get_template_part( 'parts/form' ); ?>

            <!-- End Form Send CV  -->
            


            <!-- Block VÅRE FAGOMRÅDER -->

            <?php get_template_part( 'parts/cta' ); ?>

            <!-- END Block VÅRE FAGOMRÅDER -->

        </section> <!-- END Section Gradient -->



	
    </main> <!-- end Main -->

<?php get_footer(); ?>
