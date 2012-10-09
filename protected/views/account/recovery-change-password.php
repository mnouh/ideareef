<?php
$this->pageTitle = Yii::app()->name . ' - Change Password Recovery';
?>
<script type="text/javascript">
    $(document).ready(function(){
        
        $("div#close").click(function () {
      $('div#status').slideUp();
    });
    });
</script>


<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'recovery-change-password-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

<div id="status" class="blueNotif" style="margin:auto; width:500px;">
    <div>Now its time to change your password! Please pick a tough one. 
    <div id="close" class="close" style="cursor:pointer; float:right"><img src="<?php echo Yii::app()->baseUrl; ?>/images/close.png" alt="" width="15" height="15" border="0"></div>
    </div>
</div>

<p>
        &nbsp;
    </p>

<div class="loginPage" id="Content">
    <div class="login">
        <div class="inside">
            <h3><?php echo $form->label($model, 'password');?></h3>
                <p>
                    <?php
                    $this->widget('ext.validators.EStrongPassword.EStrongPassword', array('form' => $form, 'model' => $model, 'attribute' => 'password', 'requirementOptions'=> array('displayMinChar' => false), 'htmlOptions' => array('class' => 'inputBox')));
                    ?>
                    <?php echo $form->error($model, 'password'); ?>
                </p>

                <h3><?php echo $form->label($model, 'confirmPassword');?></h3>
                <p>
                    <?php echo $form->passwordField($model, 'confirmPassword', array('class' => 'inputBox')); ?>
                    <?php echo $form->error($model, 'confirmPassword'); ?>
                </p>
                <p>
                <?php echo CHtml::submitButton('Change Password', array('class' => 'BtnOrange', 'style' => 'margin: 5px auto; float:none;')); ?>
                </p>
                <div>
            
                <p><a href="<?php echo $this->createUrl('account/signup'); ?>">Sign Up</a> &nbsp;|&nbsp; <a href="#">Forgot your email?</a></p>
                </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->endWidget(); ?>
