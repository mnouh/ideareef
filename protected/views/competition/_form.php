<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competition-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
            
            <?php echo $form->labelEx($model,'startDate'); ?>
        <?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
        //'name' => CHtml::activeName($model, 'start_date'),
        'model'=>$model,
        'attribute' => 'startDate',
        'value' => $model->attributes['startDate'],
                    //'defaultOptions' => array('altFormat' => 'mm-dd-yy', 'dateFormat' => 'yy-mm-dd'),
        'options'=>array(
                'showAnim'=>'fold',
                'dateFormat' => 'mm-dd-yy',
                ),
        'htmlOptions'=>array(
                'style'=>'height:20px; width:80px;',

        ),
));
                ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
        //'name' => CHtml::activeName($model, 'start_date'),
        'model'=>$model,
        'attribute' => 'endDate',
        'value' => $model->attributes['endDate'],
                    //'defaultOptions' => array('altFormat' => 'mm-dd-yy', 'dateFormat' => 'yy-mm-dd'),
        'options'=>array(
                'showAnim'=>'fold',
                'dateFormat' => 'mm-dd-yy',
                ),
        'htmlOptions'=>array(
                'style'=>'height:20px; width:80px;',

        ),
));
                ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solutionDescription'); ?>
		<?php echo $form->textArea($model,'solutionDescription'); ?>
		<?php echo $form->error($model,'solutionDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anonymous'); ?>
		<?php echo $form->textField($model,'anonymous'); ?>
		<?php echo $form->error($model,'anonymous'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'openSolutions'); ?>
		<?php echo $form->textField($model,'openSolutions'); ?>
		<?php echo $form->error($model,'openSolutions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publicVoting'); ?>
		<?php echo $form->textField($model,'publicVoting'); ?>
		<?php echo $form->error($model,'publicVoting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentsEnabled'); ?>
		<?php echo $form->textField($model,'commentsEnabled'); ?>
		<?php echo $form->error($model,'commentsEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acceptMultipleSolutions'); ?>
		<?php echo $form->textField($model,'acceptMultipleSolutions'); ?>
		<?php echo $form->error($model,'acceptMultipleSolutions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->