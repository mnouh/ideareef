<?php
$this->pageTitle=Yii::app()->name . ' - Sign Up';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">
        <h2>Sign Up</h2>
      
    <h3><p class="description"><span class="disclaimer">* Not available in all locations</span>Please sign up with your email address.*</p></h3>
    <?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>

</div>
    <?php else: ?>
    
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
        //'focus' => array($model,'firstName'),
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

                
        <div>
		<?php echo $form->label($model,'firstName', array ('for'=> 'name')); ?>
		<?php echo $form->textField($model,'firstName', array ('class' => 'sync')); ?>
                <?php echo $form->error($model,'firstName'); ?>
                <span id="nameInfo">What's your first name?</span>
                
	</div>

        <div>
		<?php echo $form->label($model,'lastName', array ('for'=> 'name')); ?>
		<?php echo $form->textField($model,'lastName', array ('class' => 'sync')); ?>
		<?php echo $form->error($model,'lastName'); ?>
                <span id="nameInfo">What's your last name?</span>    
	</div>
        
	<div>
		<?php echo $form->label($model,'username', array ('for'=> 'name')); ?>
		<?php echo $form->textField($model,'username', array ('class' => 'sync')); ?>
		<?php echo $form->error($model,'username'); ?>
            
                <span id="nameInfo">What's your email address?</span>    
	</div>
        

        <div>
		<?php echo $form->label($model,'password'); ?>
                <?php
		$this->widget('ext.validators.EStrongPassword.EStrongPassword',
                array('form'=>$form, 'model'=>$model, 'attribute'=>'password', 'htmlOptions' => array('class' => 'sync')));
                
                ?>
                <?php echo $form->error($model,'password'); ?>
                   
	</div>
        
        <div>
		<?php echo $form->label($model,'confirmPassword'); ?>
		<?php echo $form->passwordField($model,'confirmPassword', array ('class' => 'sync')); ?>
		<?php echo $form->error($model,'confirmPassword'); ?>
		<span id="nameInfo">At least 5 characters.</span>    
	</div>
        
	<div>
		<?php echo CHtml::submitButton('  Sign Up  ', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
           <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            
	</div>



<?php $this->endWidget(); ?>
<?php endif; ?>
</div>
</div>
</div><!-- form -->