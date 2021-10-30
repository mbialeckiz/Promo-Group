<?php
 /*
    Template Part: Kontakt - 3 boxes
*/
?>

<div class="contact-3boxes">
    <div class="container">
        <?php
        if( have_rows('block_kontakt_3_boxes_repeater') ):
            echo '<div class="contact-3boxes__wrapper">';
            while ( have_rows('block_kontakt_3_boxes_repeater') ) : the_row();
            $boxes_title = get_sub_field('block_kontakt_3_boxes_title');
            $boxes_icon = get_sub_field('block_kontakt_3_boxes_icon');
            $boxes_text = get_sub_field('block_kontakt_3_boxes_text');
            echo '<div class="contact-3boxes__single-box">';
                echo '<img src="' . $boxes_icon['url'] . '" alt="' . $boxes_icon['alt'] . '" class="contact-3boxes__single-box--icon" />';
                echo '<div class="contact-3boxes__single-box--description">';
                    echo '<h3>' . $boxes_title . '</h3>';
                    echo '<p>' . $boxes_text . '</p>';
                echo '</div>';
            echo '</div>';
            endwhile;
            echo '</div>';
        endif;
        ?> 
    </div>
</div>