

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
                    'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>

                    <div>
                        <?php echo $form->label($model, 'Username'); ?>
    <?php echo $form->textField($model, 'username', array('class' => 'sync')); ?>
    <?php echo $form->error($model, 'username', array('class' => 'error')); ?>
                    </div>

                    <div>
    <?php echo CHtml::submitButton('Update Username', array('name' => 'Submit', 'class' => 'btn primary')); ?>
                    </div>

                    <!-- form -->
    <?php $this->endWidget(); ?>
<?php endif; ?>
