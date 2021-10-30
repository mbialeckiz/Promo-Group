<?php
 /*
    Template Part: Steps block
*/
?>

<div class="steps">
    <?php
        $block_steps_header = get_field( 'block_steps_header' ); 
    ?>
        <div class="steps__wrapper container">
            <?php if ($block_steps_header): ?>
            <header>
                <h2 class="steps__header">
                    <?php echo $block_steps_header; ?>
                </h2>
            </header>
            <?php endif; ?>

            <?php
            if( have_rows('steps_block_repeater') ):
                echo '<div class="steps__wrapper--inner">';
                while ( have_rows('steps_block_repeater') ) : the_row();
                    $single_step_header = get_sub_field('single_step_header');
                    $single_step_number = get_sub_field('single_step_number');
                    $single_step_text = get_sub_field('single_step_text');
                    echo '<div class="steps__single-step single-step">';
                        echo '<div class="single-step__header-wrapper">';
                            echo '<span class="single-step__number">' . $single_step_number . '</span>';
                            echo '<h3 class="single-step__header">' . $single_step_header . '</h3>';
                        echo '</div>';
                        echo '<p class="single-step__text">' . $single_step_text . '</p>';
                    echo '</div>';
                endwhile;
                echo '</div>';
            endif;
            ?> 
        </div>

        </div>