<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">
<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array ('class' => 'sync')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array ('class' => 'sync')); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe', array ('class' => 'sync')); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
    </div>
</div>
</div>

<div class="loginPage" id="Content">
  <div class="login">
    <div class="inside">
    <h3>Email</h3>
      <p>
        <input name="textfield" type="text" class="inputBox">
  </p>
      <h3>Password</h3>
      <p>
        <input name="textfield2" type="password" class="inputBox">
        </p>
      <p>
        <input name="Submit" type="submit" class="btn" value="Login">
        </p>
      <p><a href="#">Forgot Password</a> &nbsp;|&nbsp; <a href="#">Recover User e-mail</a></p>
      </div>
  </div><div class="clear"></div>
</div>