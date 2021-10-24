<?php
 /*
    Template Part: Hero Image Alternative
*/
?>


<!-- Hero Image ALT -->
<section class="heroimage-alt">

    <?php
    $heroimage_alt = get_field('heroimage_alt');
    $heroimage_alt_heading_h1 = get_field('heroimage_alt_heading_h1');
    $heroimage_alt_subheading = get_field('heroimage_alt_subheading');
    $heroimage_alt_cta_button_text = get_field('heroimage_alt_cta_button_text');
    $heroimage_alt_cta_button_url = get_field('heroimage_alt_cta_button_url');

    if ($heroimage_alt): ?>

    <div class="heroimage-alt__background">
        <div class="grid-x grid-margin-x grid-padding-x container">     
            <div class="heroimage-alt__titlewrapper small-12 medium-12 large-6 cell">
            
                <span class="heroimage-alt__undertitle">
                    <?php echo $heroimage_alt_subheading; ?>
                </span>
                
                <?php if ($heroimage_alt_heading_h1): ?>
                    <h1 class="heroimage-alt__pagetitle">
                        <?php echo $heroimage_alt_heading_h1; ?>
                    </h1>
                <?php endif; ?>

                <a href="<?php echo $heroimage_alt_cta_button_url; ?>" 
                class="button heroimage-alt__cta-button">
                    <?php echo $heroimage_alt_cta_button_text; ?>
                </a>
            </div>
            <div class="heroimage-alt__imagewrapper small-12 medium-12 large-6 cell">
            <?php if ( $heroimage_alt ) : ?>
                <img src="<?php echo esc_url( $heroimage_alt['url'] ); ?>" alt="<?php echo esc_attr( $heroimage_alt['alt'] ); ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>

    <?php endif; ?>



</section> <!-- END Hero Image -->