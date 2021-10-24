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

            <div class="heroimage__backgroundimage" style="background-image: url('<?php echo $heroimage[
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
            <?php endif;
            ?>
            
            </div>

        </section> <!-- Hero Image END -->

        
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
        </div> <!-- Block with two columns END -->
        
        <!-- Block VÅRE FAGOMRÅDER -->
        <div class="block-fagomraader">
            <?php
            $fagomraader_block_header = get_field( 'fagomraader_block_header' );
            $fagomraader_block_text = get_field( 'fagomraader_block_text' );
            ?>
            <div class="block-fagomraader__wrapper container">
                <?php if ($fagomraader_block_header): ?>
                    <h2 class="block-fagomraader__header">
                        <?php echo $fagomraader_block_header; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($fagomraader_block_text): ?>
                    <div class="block-fagomraader__text">
                        <p><?php the_field('fagomraader_block_text'); ?></p>
                    </div>
                <?php endif; ?>

                <?php
                if( have_rows('fagomraader_block_repeater') ):
                    echo '<div class="block-fagomraader__specialists">';
                    while ( have_rows('fagomraader_block_repeater') ) : the_row();
                    $profession_name = get_sub_field('fagomraader_name');
                    $profession_icon = get_sub_field('fagomraader_icon');
                    echo '<div class="block-fagomraader__single-specialist ' . $profession_name . '">';
                    echo '<img src="' . $profession_icon['url'] . '" alt="' . $profession_icon['alt'] . '" />';
                    echo '<p>' . $profession_name . '</p>';
                    echo '</div>';
                    endwhile;
                    echo '</div>';
                endif;
                ?> 

            </div>

        </div> <!-- Block VÅRE FAGOMRÅDER END-->

        </section> <!-- end Section Gradient -->

        <!-- Section Call-to-Action -->
        <section class="cta">
        <?php
            $cta_heading = get_field('cta_heading');
            $cta_description = get_field('cta_description');
            $cta_button_text = get_field('cta_button_text');
            $cta_button_url = get_field('cta_button_url');
            $cta_background_image = get_field('cta_background_image'); // check this out later! Must be moved!

            if ($cta_background_image != null ): ?>

            <div class="cta__backgroundimage" style="background-image: url('<?php echo $cta_background_image[
                'url'
            ]; ?>');" alt="<?php echo esc_attr($cta_background_image['alt']); ?>">
                <div class="container">     
                    <div class="cta__wrapper">

                        <?php if ($cta_heading): ?>
                            <h2 class="cta__heading">
                                <?php echo $cta_heading; ?>
                            </h2>
                        <?php endif; ?>
                    
                        <p class="cta__description">
                            <?php echo $cta_description; ?>
                        </p>
                        
                        <a href="<?php echo $cta_button_url; ?>" class="button cta__button">
                            <?php echo $cta_button_text; ?>
                        </a>
                    </div>
                </div>
            <?php endif;
            ?>
            
            </div>
        </section>

	
    </main> <!-- end Main -->

<?php get_footer(); ?>
