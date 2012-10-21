<div class="form" id="customForm" class="sync">
    <div id="content-container">

<?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
    <?php else: ?>
        <h6>Change Password</h6>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
        //'focus' => array($model,'firstName'),
	'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>


<div>
        <?php echo $form->label($model, 'oldPassword'); ?>
        <?php echo $form->passwordField($model,'oldPassword', array('class' => 'sync')); ?>
        <?php echo $form->error($model,'oldPassword'); ?>
        <span id="oldPassword">What's your old password?</span>
</div>

<div>
        <?php echo $form->label($model, 'newPassword'); ?>
        <?php
		$this->widget('ext.validators.EStrongPassword.EStrongPassword',
                array('form'=>$form, 'model'=>$model, 'attribute'=>'newPassword', 
                    'requirementOptions'=>array('minChar'=>5, 'displayMinChar' => false, 'one_special_char'=>false),
                    'htmlOptions' => array('class' => 'sync')
		));
         ?>
        <?php echo $form->error($model,'newPassword'); ?>
        <span id="confirmPassword">Enter your new password.</span>
</div>

<div>
        <?php echo $form->label($model, 'confirmPassword'); ?>
        <?php echo $form->passwordField($model,'confirmPassword', array('class' => 'sync')); ?>
        <?php echo $form->error($model,'confirmPassword'); ?>
    <span id="confirmNewPassword">Please confirm your new password.</span>
</div>
    
    <div>
        <?php echo CHtml::ajaxSubmitButton ("Change Password",
                              CController::createUrl('user/changePassword'), 
                              array(
                                    'data'=>'js:jQuery(this).parents("form").serialize()+"&isAjaxRequest=1"',               
                                    'success'=>
                                    'function(data){
                                     jQuery("div.form").remove();
                                     $("div#passwordForm").html(data);
                                     return false;
                                     }'    
 
                ), array('class' => 'btn primary'));
                ?>
        <?php
                        echo CHtml::ajaxButton(
                                'Cancel', array('#'), array('success' => 'js:function(data) {    
                                jQuery("div.form").remove();
                                }',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                ), array('class' => 'btn secondary')
                        );
                        ?>
    </div>


<!-- form -->
<?php $this->endWidget(); ?>
<?php endif; ?>
</div>
</div>