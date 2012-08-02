<div class="form">

<?php 
    $form = $this->beginWidget('CActiveForm', array(
    'id' => 'pavilionEdit-form',
    'enableAjaxValidation' => true,)); 
?>
    
<div class="row">    
<?php 
    echo $form->labelEx($model,'aboutUs');
    echo $form->textArea($model,'aboutUs');
    echo $form->error($model,'aboutUs'); 
?>
</div>
    
<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn primary')); ?>
</div>
    
<?php $this->endWidget(); ?>
    
</div>

