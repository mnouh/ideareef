<?php
$this->pageTitle = Yii::app()->name . ' - Account Recovery';
?>
<script type="text/javascript">
    $(document).ready(function(){
        
        $("a#close").click(function () {
      $('div#status').slideUp();
    });
    });
</script>


<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'account-recovery-step-two-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>

<div id="output">
    &nbsp;
</div>


<div class="loginPage" id="Content">
    <div id="status">
         <?php if(Yii::app()->user->hasFlash('status')): ?>
<div class="blueNotif" style="margin:auto; width:500px;">
	<?php echo Yii::app()->user->getFlash('status'); ?>
    <div class="close" style="float:right"><a id="close" href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/close.png" alt="" width="15" height="15" border="0"></a></div>

</div>
            <?php endIf;?>
        </div>
    <p>&nbsp</p>
    <div class="login">
        <div class="inside">
            <h3><?php echo $form->label($model, 'email');?></h3>
<p>
<?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
<?php echo $form->error($model, 'email', array('class' => 'formError')); ?>
</p>          

<h3><?php echo $form->label($model, 'verifyCode');?></h3>
<p>
    <?php echo $form->textField($model, 'verifyCode', array('class' => 'inputBox')); ?>
    <?php echo $form->error($model, 'verifyCode', array('class' => 'formError')); ?>
    
</p>
            <p>
                <?php 
              echo CHtml::ajaxSubmitButton(
                                        'Verify',
                                        array('account/verifyCode'),
                                        array(
                                                'success'=>'js:function(data) {
                                                    jQuery("div#output").html(data);}',
                                                //'update'=>'#successMessage',
                                                //'beforeSend' => 'function() {alert("testing");}',
                                                //'validated' => 'function() {$("div#load").removeClass("loading");}',
                                                //'complete' => 'function() {$("div.login").slideUp();}',
                                                'type' => 'POST'
                                        ),
                                        array('class' => 'btn')
                                        
                                        
                                );
      
      ?>
            </p>
            <p><a href="<?php echo $this->createUrl('account/signup'); ?>">Sign Up</a> &nbsp;|&nbsp; <a href="#">Forgot your email?</a></p>
            
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->endWidget(); ?>
