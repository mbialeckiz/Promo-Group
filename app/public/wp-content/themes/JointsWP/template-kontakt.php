<?php
/*
Template Name: Kontakt
*/

get_header(); ?>

	<main class="main">
	
        <div class="contact-wrapper">
            <!-- Hero Image Alt -->
                <?php get_template_part( 'parts/hero' ); ?>
            <!-- END Hero Image Alt -->

            <!-- Kontakt - 3 boxes -->
                <?php get_template_part( 'parts/kontakt' ); ?>
            <!-- END Kontakt - 3 boxes -->

        </div>

        <!-- Maps block -->
            <?php get_template_part( 'parts/maps' ); ?>
        <!-- END Maps Block -->
        
        <section class="gradient">



        </section> <!-- END Section Gradient -->
	
    </main> <!-- end Main -->

<?php get_footer(); ?>
