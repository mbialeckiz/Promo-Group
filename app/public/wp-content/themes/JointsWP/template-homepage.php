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
            $heroimage_cta_button_url = get_field( 'heroimage_cta_button_url' );

            if ( $heroimage ): ?>

            <div class="heroimage__backgroundimage" style="background-image: url('<?php echo $heroimage['url']; ?>');" alt="<?php echo esc_attr($heroimage['alt']); ?>">
                <div class="container">     
                    <div class="heroimage__titlewrapper">
                    
                        <span class="heroimage__undertitle">
                            <?php echo $heroimage_subheading; ?>
                        </span>
                        
                        <?php if ( $heroimage_heading_h1 ) : ?>
                            <h1 class="heroimage__pagetitle">
                                <?php echo $heroimage_heading_h1; ?>
                            </h1>
                        <?php endif; ?>

                        <a href="<?php echo $heroimage_cta_button_url; ?>" class="button heroimage__cta-button">
                            <?php echo $heroimage_cta_button_text; ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
            
            </div>

        </section>
	
    </main> <!-- end Main -->

<?php get_footer(); ?>
