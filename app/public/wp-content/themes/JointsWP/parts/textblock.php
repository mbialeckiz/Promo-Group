<?php
 /*
    Template Part: Text block
*/
?>

<section class="text-block">

    <div class="container">
        <?php
        $text_block = get_field('text_block');

        if ($text_block): ?>

        <div class="text-block__wrapper ">

            <p class="text-block__content">
                <?php echo $text_block; ?>
            </p>    
        </div>

        <?php endif; ?>
    </div>

</section> 