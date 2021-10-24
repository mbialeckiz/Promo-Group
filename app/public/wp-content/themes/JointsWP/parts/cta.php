<?php

    /*
    Template Part: CTA block
    */
                $cta_heading = get_field('cta_heading');
                $cta_description = get_field('cta_description');
                $cta_button_text = get_field('cta_button_text');
                $cta_button_url = get_field('cta_button_url');
                $cta_background_image = get_field('cta_background_image'); // check this out later! Must be moved!

                if ($cta_background_image != null ): ?>

                <div class="cta__backgroundimage backgroundimage gradient" style="background-image: url('<?php echo $cta_background_image[
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
                </div>
                
                <?php else: ?>

                <div class="cta__nobgimage gradient">
                    <div class="container">     
                        <div class="cta__wrapper">

                            <?php if ($cta_heading): ?>
                                <h2 class="cta__nobgimage--heading">
                                    <?php echo $cta_heading; ?>
                                </h2>
                            <?php endif; ?>
                        
                            <p class="cta__nobgimage--description">
                                <?php echo $cta_description; ?>
                            </p>
                            
                            <a href="<?php echo $cta_button_url; ?>" class="button cta__button">
                                <?php echo $cta_button_text; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endif; ?>