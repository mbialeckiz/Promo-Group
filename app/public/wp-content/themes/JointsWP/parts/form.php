<?php
 /*
    Template Part: Form
*/
?>

<section class="form">
<?php
    $form_header = get_field('form_header');
    $form_text_field = get_field('form_text_field');?>

    <div class="container">     
        <div class="form__wrapper">
            <?php if ($form_header): ?>
                <h2 class="form__header">
                    <?php echo $form_header; ?>
                </h2>
            <?php endif; ?>
             
            <?php if ($form_text_field): ?>
                <div class="form__form--wrapper ">
                    <?php echo $form_text_field; ?>
                </div>
            <?php endif; ?>            

        </div>
    </div>
</section>