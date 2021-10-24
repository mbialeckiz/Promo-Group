<?php
 /*
    Template Part: Hva tilbyr Promo Group
*/
?>

        <div class="block-hvatilbyrpromo">
            <?php
            $hvatilbyrpromo_block_header = get_field( 'hvatilbyrpromo_block_header' );
            ?>
            <div class="block-hvatilbyrpromo__wrapper container">
                <?php if ($hvatilbyrpromo_block_header): ?>
                    <h2 class="block-hvatilbyrpromo__header">
                        <?php echo $hvatilbyrpromo_block_header; ?>
                    </h2>
                <?php endif; ?>

                <?php
                if( have_rows('hvatilbyrpromo_block_repeater') ):
                    echo '<div class="block-hvatilbyrpromo__usps">';
                    while ( have_rows('hvatilbyrpromo_block_repeater') ) : the_row();
                    $usps_name = get_sub_field('hvatilbyrpromo_name');
                    $usps_icon = get_sub_field('hvatilbyrpromo_icon');
                    $usps_text = get_sub_field('hvatilbyrpromo_text');
                    echo '<div class="block-hvatilbyrpromo__single-usp ' . $usps_name . '">';
                        echo '<img src="' . $usps_icon['url'] . '" alt="' . $usps_icon['alt'] . '" class="block-hvatilbyrpromo__single-usp--icon" />';
                        echo '<div class="block-hvatilbyrpromo__single-usp--description">';
                            echo '<h3>' . $usps_name . '</h3>';
                            echo '<p>' . $usps_text . '</p>';
                        echo '</div>';
                    echo '</div>';
                    endwhile;
                    echo '</div>';
                endif;
                ?> 

            </div>

        </div>