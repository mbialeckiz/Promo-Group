<?php
 /*
    Template Part: 50/50 block
*/
?>

<section class="block5050">

    <?php
    $block_5050_image = get_field('block_5050_image');
    $block_5050_heading = get_field('block_5050_heading');
    $block_5050_description = get_field('block_5050_description');
    $block_5050_cta_button_text = get_field('block_5050_cta_button_text');
    $block_5050_cta_button_url = get_field('block_5050_cta_button_url');
    $block_5050_fancy_header = get_field('block_5050_fancy_header');

    if ($block_5050_image): ?>

    <div class="block5050__wrapper">
        <div class="container block5050__wrapper--fancy-heading">
            <?php if ($block_5050_fancy_header): ?>
                <h3 class="block5050__fancy-heading">
                    <?php echo $block_5050_fancy_header; ?>
                </h3>
            <?php endif; ?>
        </div>

        <div class="grid-x container block5050__wrapper--inner">     
            <div class="block5050__titlewrapper small-12 medium-12 large-6 cell">
                
                <?php if ($block_5050_heading): ?>
                    <h3 class="block5050__heading">
                        <?php echo $block_5050_heading; ?>
                    </h3>
                <?php endif; ?>

                <p class="block5050__description">
                    <?php echo $block_5050_description; ?>
                </p>

                <a href="<?php echo $block_5050_cta_button_url; ?>" 
                class="button block5050__cta-button">
                    <?php echo $block_5050_cta_button_text; ?>
                </a>
            </div>
            <div class="block5050__imagewrapper small-12 medium-12 large-6 cell">
            <?php if ( $block_5050_image ) : ?>
                <img src="<?php echo esc_url( $block_5050_image['url'] ); ?>" alt="<?php echo esc_attr( $block_5050_image['alt'] ); ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>

    <?php endif; ?>

</section> 