<?php
 /*
    Template Part: Form
*/
?>

<section class="send-cv">
<?php
    $send_cv_header = get_field('send_cv_header');
    $send_cv_text_field = get_field('send_cv_text_field');?>

    <div class="container">     
        <div class="form-wrapper send-cv__wrapper">
            <?php if ($send_cv_header): ?>
                <h2 class="form-heading send-cv__header">
                    <?php echo $send_cv_header; ?>
                </h2>
            <?php endif; ?>
             
            <?php if ($send_cv_text_field): ?>
                <div class="form-wrapper send-cv__form--wrapper ">
                    <?php echo $send_cv_text_field; ?>
                </div>
            <?php endif; ?>            

        </div>
    </div>
</section>