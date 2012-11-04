
<?php
$this->pageTitle = Yii::app()->name . ' - Under Construction';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'learnmore-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

<div class="loginPage" id="Content">
    <div class="login">
        <div class="inside">
        &nbsp;
        <center><img src="http://beta.ideareef.com/images/logo.png"></center>
        
            <h3 class="fancy" style="text-align:center;margin-top:50px;margin-bottom:30px;">
          Working Hard to Launch IdeaReef
          <br>
          Learn More. Input your email, to learn more about what we do.
        </h3>
<?php echo $form->textField($model, 'email', array('class' => 'inputBox', 'style' => 'width:220px;')); ?>
<?php echo CHtml::submitButton('Go', array('name' => 'Submit', 'class' => 'lgbtnorange', 'style' => 'float:right; margin-right:20px;')); ?>
            <p>
                <?php echo $form->error($model, 'email', array('class' => 'formError')); ?>
            </p>
        
    </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->endWidget(); ?>