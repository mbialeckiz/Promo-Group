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
            $heroimage_heading_h1 = the_field('heroimage_heading_h1');
            $heroimage_subheading = the_field('heroimage_subheading');
            $heroimage_cta_button = the_field('heroimage_cta_button');

            if ($heroimage): ?>

            <div class="heroimage__backgroundimage" src="<?php echo esc_url(
                    $heroimage['url']
                ); ?>" alt="<?php echo esc_attr($heroimage['alt']); ?>">
                              
                <div class="grid-y">
                    
                    <div class="cell small-12 large-6">
                        <span class="heroimage__undertitle ">
                            <?php echo $heroimage_subheading; ?>
                        </span>
                    </div>
                        
                    <div class="cell small-12 large-6">
                        <h1 class="heroimage__pagetitle cell small-12 large-6">
                            <?php echo $heroimage_heading_h1; ?>
                        </h1>
                    </div>

                    <div class="cell small-12 large-6">
                        <button class="heroimage__button small-12 large-6">
                            <?php echo $heroimage_cta_button; ?>
                        </button>

                    </div>

                </div>

            <?php endif; ?>
            
            </div>

        </section>
	
    </main> <!-- end Main -->

<?php get_footer(); ?>
