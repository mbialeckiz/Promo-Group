<?php
 /*
    Template Part: Testimonials
*/
?>

<section class="testimonials">
    <div class="container">
        <?php
        $testimonials_header = get_field( 'testimonials_header' );
        $testimonials_icon = get_field( 'testimonials_icon' );
        ?>
        <div class="testimonials__wrapper container">
            <?php if ($testimonials_header): ?>
                <h2 class="testimonials__header">
                    <?php echo $testimonials_header; ?>
                </h2>
            <?php endif; ?>

            <?php if ( $testimonials_icon ) : ?>
                <img src="<?php echo esc_url( $testimonials_icon['url'] ); ?>" class="testimonials__icon" alt="<?php echo esc_attr( $testimonials_icon['alt'] ); ?>" />
            <?php endif; ?>

            <?php
            if( have_rows('single_testimonial_repeater') ):
                echo '<div class="testimonials__single--inner">';
                while ( have_rows('single_testimonial_repeater') ) : the_row();
                $single_testimonial_title = get_sub_field('single_testimonial_title');
                $single_testimonial_text = get_sub_field('single_testimonial_text');
                $single_testimonial_name = get_sub_field('single_testimonial_name');
                    echo '<div class="testimonials__single--box">';
                    echo '<h3 class="testimonials__single--title">' . $single_testimonial_title . '</h3>';
                    echo '<p class="testimonials__single--text">' . $single_testimonial_text . '</p>';
                    echo '<p class="testimonials__single--name">' . $single_testimonial_name . '</p>';
                    echo '</div>';
                endwhile;
                echo '</div>';
            endif;
            ?> 

        </div>
    </div>
</section>