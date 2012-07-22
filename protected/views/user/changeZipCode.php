<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">
<?php


echo 'Hello '. $model->firstName . ' '. $model->lastName . ' '. $model->zipcode;


?>

<?php if (Yii::app()->user->hasFlash('success')): ?>

<div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>

            <?php else: ?>
<?php

                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'changeZipCode-form',
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>

                    <div>
                        <?php echo $form->label($model, 'zipcode'); ?>
    <?php echo $form->textField($model, 'zipcode', array('class' => 'sync')); ?>
    <?php echo $form->error($model, 'zipcode', array('class' => 'error')); ?>
                    </div>

                    <div>
    <?php echo CHtml::submitButton('Update ZipCode', array('name' => 'Submit', 'class' => 'btn primary')); ?>
                    </div>

                    <!-- form -->
   <?php $this->endWidget(); ?>
<?php endif; ?>
    </div>
</div>
</div>