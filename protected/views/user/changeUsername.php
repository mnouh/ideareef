<script type="text/javascript">
    $(document).ready(function(){
    $('#User_profileUser').keyup(function() {
    $('#profileLink').html('www.ideareef.com/'+$('#User_profileUser').val());
});


    });

</script>

            <h2><?php echo $this->id . '/' . $this->action->id; ?></h2>

            <?php if (Yii::app()->user->hasFlash('success')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>

            <?php else: ?>

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'changeUsername-form',
                    'enableAjaxValidation' => true,
                    //'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>

                    <div>
                        <?php echo $form->label($model, 'profileUser'); ?>
    <?php echo $form->textField($model, 'profileUser', array('class' => 'sync')); ?>
    <?php echo $form->error($model, 'profileUser', array('class' => 'error')); ?>
                        <div id="profileLink">
        <?php
    
        echo $profileLink;
    ?>
                        </div>
                    </div>

                    <div>
    <?php echo CHtml::submitButton('Update Username', array('name' => 'Submit', 'class' => 'btn primary')); ?>
                    </div>

                    <!-- form -->
    <?php $this->endWidget(); ?>
<?php endif; ?>
