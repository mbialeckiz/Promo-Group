<?php
/*
Template Name: Om oss
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
    
        
            <!-- Block VÅRE FAGOMRÅDER -->

                <?php get_template_part( 'parts/cta' ); ?>

            <!-- END Block VÅRE FAGOMRÅDER -->

        </section> <!-- END Section Gradient -->

        <!-- Block 50/50 -->

            <?php get_template_part( 'parts/5050' ); ?>

        <!-- END Block 50/50 -->

	
    </main> <!-- end Main -->

<?php get_footer(); ?>
