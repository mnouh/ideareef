<?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
    <?php else: ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
        //'focus' => array($model,'firstName'),
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>


<div>
        <?php echo $form->label($model, 'oldPassword'); ?>
        <?php echo $form->passwordField($model,'oldPassword', array ('class' => 'sync')); ?>
        <?php echo $form->error($model,'oldPassword', array('class'=>'error')); ?>
</div>

<div>
        <?php echo $form->label($model, 'newPassword'); ?>
        <?php
		$this->widget('ext.validators.EStrongPassword.EStrongPassword',
                array('form'=>$form, 'model'=>$model, 'attribute'=>'newPassword', 
                    'requirementOptions'=>array('minChar'=>5, 'displayMinChar' => false, 'one_special_char'=>false),
                    'htmlOptions' => array ('class' => 'sync')
		));
         ?>
        <?php echo $form->error($model,'newPassword', array('class'=>'error')); ?>
</div>

<div>
        <?php echo $form->label($model, 'confirmPassword'); ?>
        <?php echo $form->passwordField($model,'confirmPassword', array ('class' => 'sync')); ?>
        <?php echo $form->error($model,'confirmPassword', array('class'=>'error')); ?>
</div>
    
    <div>
        <?php echo CHtml::submitButton('  Change Password  ', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
    </div>
    


<!-- form -->
<?php $this->endWidget(); ?>
<?php endif; ?>

