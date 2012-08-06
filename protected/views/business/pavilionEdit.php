<h1> Edit Pavilion </h1>
<div class="form" id="customForm" class="sync">
<?php 
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'pavilionEdit-form',
    'enableAjaxValidation'=>true,
    'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),   
    ));
?>
    
<div>    
    <?php 
        echo $form->labelEx($model,'aboutUs');
        echo $form->textArea($model,'aboutUs', array ('class' => 'sync'));
        echo $form->error($model,'aboutUs'); 
    ?>
</div>
    
<div>
    <?php echo CHtml::submitButton('  Save  ', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
</div>
<?php $this->endWidget(); ?>    
</div>