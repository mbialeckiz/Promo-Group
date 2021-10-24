<?php
 /*
    Template Part: Hva tilbyr Promo Group
*/
?>

        <div class="block-hvatilbyr">
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

        </div>