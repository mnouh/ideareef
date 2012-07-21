<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessId'); ?>
		<?php echo $form->textField($model,'businessId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solutionDescription'); ?>
		<?php echo $form->textField($model,'solutionDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anonymous'); ?>
		<?php echo $form->textField($model,'anonymous'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'openSolutions'); ?>
		<?php echo $form->textField($model,'openSolutions'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publicVoting'); ?>
		<?php echo $form->textField($model,'publicVoting'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commentsEnabled'); ?>
		<?php echo $form->textField($model,'commentsEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acceptMultipleSolutions'); ?>
		<?php echo $form->textField($model,'acceptMultipleSolutions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->