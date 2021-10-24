<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<main class="main">
	
		<!-- Hero Image -->
        <section class="heroimage">

            <?php
            $heroimage = get_field('heroimage');
            $heroimage_heading_h1 = get_field('heroimage_heading_h1');
            $heroimage_subheading = get_field('heroimage_subheading');
            $heroimage_cta_button_text = get_field('heroimage_cta_button_text');
            $heroimage_cta_button_url = get_field('heroimage_cta_button_url');

            if ($heroimage): ?>

            <div class="heroimage__backgroundimage backgroundimage" style="background-image: url('<?php echo $heroimage[
                'url'
            ]; ?>');" alt="<?php echo esc_attr($heroimage['alt']); ?>">
                <div class="container">     
                    <div class="heroimage__titlewrapper">
                    
                        <span class="heroimage__undertitle">
                            <?php echo $heroimage_subheading; ?>
                        </span>
                        
                        <?php if ($heroimage_heading_h1): ?>
                            <h1 class="heroimage__pagetitle">
                                <?php echo $heroimage_heading_h1; ?>
                            </h1>
                        <?php endif; ?>

                        <a href="<?php echo $heroimage_cta_button_url; ?>" class="button heroimage__cta-button">
                            <?php echo $heroimage_cta_button_text; ?>
                        </a>
                    </div>
                </div>
            </div>

            <?php endif; ?>
            
            

        </section> <!-- END Hero Image -->

        
        <section class="gradient">

        <!-- Block with two columns -->
        <div class="block2column">
            <?php
            $block_2col_header = get_field('block_2col_header');
            $block_2col_picture_left = get_field('block_2col_picture_left');
            $block_2col_text_left = get_field('block_2col_text_left');
            $block_2col_picture_right = get_field('block_2col_picture_right');
            $block_2col_text_right = get_field('block_2col_text_right');
            ?>

            <div class="block2column__wrapper container">
                <?php if ($block_2col_header): ?>
                    <h2 class="block2column__header">
                        <?php echo $block_2col_header; ?>
                    </h2>
                <?php endif; ?>
                <div class="block2column__columns">
                    <div class="block2column__column">
                        <div class="block2column__column--picture">
                        <?php if ($block_2col_picture_left): ?>
                            <img src="<?php echo esc_url(
                                $block_2col_picture_left['url']
                            ); ?>" alt="<?php echo esc_attr(
                            $block_2col_picture_left['alt'] ); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="block2column__column--text">
                            <p><?php the_field('block_2col_text_left'); ?></p>
                        </div>
                    </div>
                    <div class="block2column__column">
                        <div class="block2column__column--picture">
                        <?php if ($block_2col_picture_right): ?>
                            <img src="<?php echo esc_url(
                                $block_2col_picture_right['url']
                            ); ?>" alt="<?php echo esc_attr(
                            $block_2col_picture_right['alt'] ); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="block2column__column--text">
                            <p><?php the_field('block_2col_text_right'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END Block with two columns  -->
        
        <!-- Block VÅRE FAGOMRÅDER -->

        <?php get_template_part( 'parts/fagomraader' ); ?>

        <!-- END Block VÅRE FAGOMRÅDER -->

        </section> <!-- END Section Gradient -->

        <!-- Section Call-to-Action -->
        <section class="cta">
            
            <?php get_template_part( 'parts/cta' ); ?>

        </section> <!-- END Section Call-to-Action -->

	
    </main> <!-- end Main -->

<?php get_footer(); ?>
