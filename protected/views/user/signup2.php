<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$form = $this->beginWidget('CActiveForm', array(
    'id' => 'signup-form',
    //'focus' => array($model,'firstName'),
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
        ));


echo CHtml::link('Click Here to Login', $this->createUrl('account/login'));

$myArray = array('1', '2', '3');



?>

<div>
    <?php echo $form->errorSummary($model);?>
</div>
<div>
    <?php echo $form->label($model, 'firstName'); ?>
    <?php echo $form->textField($model, 'firstName'); ?>
    <?php echo $form->error($model, 'firstName'); ?>
</div>

<div>
    <?php echo $form->label($model, 'lastName'); ?>
    <?php echo $form->textField($model, 'lastName'); ?>
    <?php echo $form->error($model, 'lastName'); ?>
</div>

<div>
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
    <?php echo $form->error($model, 'email'); ?>
</div>

<div>
    <?php echo $form->label($model, 'password'); ?>
    <?php echo $form->passwordField($model, 'password'); ?>
    <?php echo $form->error($model, 'password'); ?>
</div>

<div>
    <?php echo $form->label($model, 'confirmPassword'); ?>
    <?php echo $form->passwordField($model, 'confirmPassword'); ?>
    <?php echo $form->error($model, 'confirmPassword'); ?>
</div>

<div>
    <?php echo $form->label($model, 'zipcode'); ?>
    <?php echo $form->textField($model, 'zipcode'); ?>
    <?php echo $form->error($model, 'zipcode'); ?>
</div>

<?php

echo CHtml::submitButton('Submit', array('class' => 'btn'))

?>

  <?php  





$this->endWidget();
?>
