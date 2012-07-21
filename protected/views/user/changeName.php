<?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
    <?php else: ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changename-form',
        //'focus' => array($model,'firstName'),
	'enableAjaxValidation'=>true,
        'enableClientValidation' => true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),
)); ?>


<div>
        <?php echo $form->label($model, 'firstName'); ?>
        <?php echo $form->textField($model,'firstName', array ('class' => 'sync')); ?>
        <?php echo $form->error($model,'firstName', array('class'=>'error')); ?>
</div>



<div>
        <?php echo $form->label($model, 'lastName'); ?>
        <?php echo $form->textField($model,'lastName', array ('class' => 'sync')); ?>
        <?php echo $form->error($model,'lastName', array('class'=>'error')); ?>
</div>
    
    <div>
        <?php //echo CHtml::submitButton('Save Changes', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
        
        <?php 
              echo CHtml::ajaxSubmitButton(
                                        'Save Changes',
                                        array('user/changeName'),
                                        array('success'=>'js:function(data) {
                                                    jQuery("form#changename-form").html(data);
                                                    $("div#load").removeClass("loading");      
                                               }',
                                                //'update'=>'#successMessage',
                                                'beforeSend' => 'function() {$("div#load").addClass("loading");}',
                                                'validated' => 'function() {$("div#load").removeClass("loading");}',
                                                'complete' => 'function() {$("div#load").removeClass("loading");}',
                                                'type' => 'POST'
                                        ),
                                array('class'=> 'btn primary')
                                );
      
      ?>
    </div>
        <div id="load">
            &nbsp;
            <div id="status">
                &nbsp;
            </div>
        </div>
    


<!-- form -->
<?php $this->endWidget(); ?>
<?php endif; ?>