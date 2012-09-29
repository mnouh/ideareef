<?php
$this->pageTitle = Yii::app()->name . ' - Account Recovery';
?>

<?php if(Yii::app()->user->hasFlash('status')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('status'); ?>
</div>

<?php else: ?>

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'account-recovery-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

<div class="loginPage" id="Content">
    <div class="login">
        <div class="inside">
            <h3>Email</h3>
<p>
<?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
<?php echo $form->error($model, 'email', array('class' => 'formError')); ?>
</p>          
            <p>
<?php echo CHtml::submitButton('Login', array('name' => 'Submit', 'class' => 'btn')); ?>
            </p>
            <p><a href="<?php echo $this->createUrl('account/signup'); ?>">Sign Up</a> &nbsp;|&nbsp; <a href="#">Forgot your email?</a></p>
            
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->endWidget(); ?>

<?php endIf; ?>