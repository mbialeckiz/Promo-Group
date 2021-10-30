<?php
 /*
    Template Part: Maps block
*/
?>

<section class="maps-block">

    <div class="maps-block__wrapper">
        <?php
        $maps_block_holder = get_field('maps_block_holder');

        if ($maps_block_holder): ?>
            
            <?php echo $maps_block_holder; ?>

        <?php endif; ?>
    </div>

</section> 