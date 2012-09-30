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
        'id'=>'account-recovery-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>


<div class="loginPage" id="Content">
    <div id="status">
         <?php if(Yii::app()->user->hasFlash('status')): ?>
<div class="blueNotif" style="margin:auto; width:500px;">
	<?php echo Yii::app()->user->getFlash('status'); ?>
    <div class="close" style="float:right"><a id="close" href="#"><img src="/~mnouh/ideareef/images/close.png" alt="" width="15" height="15" border="0"></a></div>

</div>
            <?php endIf;?>
        </div>
    <div class="login">
        <div class="inside">
            <h3>Email</h3>
<p>
<?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
<?php echo $form->error($model, 'email', array('class' => 'formError')); ?>
</p>          
            <p>
                <?php 
              echo CHtml::ajaxSubmitButton(
                                        'Retrieve',
                                        array('account/recovery'),
                                        array(
                                                'success'=>'js:function(data) {
                                                    jQuery("div#status").html(data);}',
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
