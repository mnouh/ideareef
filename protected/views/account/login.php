
<?php
$this->pageTitle = Yii::app()->name . ' - Login';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

<div class="loginPage" id="Content">
    <div class="login">
        <div class="inside">
            <h3>Email</h3>
            
<?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
<?php echo $form->error($model, 'email', array('class' => 'error')); ?>
            <div>
                &nbsp;
            </div>
            <h3>Password</h3>
            
<?php echo $form->passwordField($model, 'password', array('class' => 'inputBox')); ?>
                <?php echo $form->error($model, 'password', array('class' => 'error')); ?>
            
            <p>
                &nbsp;
            </p>
            <p>
<?php echo CHtml::submitButton('Login', array('name' => 'Submit', 'class' => 'btn')); ?>
            </p>
            <p><a href="<?php echo $this->createUrl('account/recovery'); ?>">Forgot Password</a> &nbsp;|&nbsp; <a href="#">Recover User e-mail</a></p>
            <p>
                <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'sync')); ?>
<?php echo $form->label($model, 'rememberMe'); ?>
<?php echo $form->error($model, 'rememberMe'); ?>
            </p>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->endWidget(); ?>