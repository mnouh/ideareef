<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessId')); ?>:</b>
	<?php echo CHtml::encode($data->businessId); ?>
        <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solutionDescription')); ?>:</b>
	<?php echo CHtml::encode($data->solutionDescription); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anonymous')); ?>:</b>
	<?php echo CHtml::encode($data->anonymous); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('openSolutions')); ?>:</b>
	<?php echo CHtml::encode($data->openSolutions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publicVoting')); ?>:</b>
	<?php echo CHtml::encode($data->publicVoting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentsEnabled')); ?>:</b>
	<?php echo CHtml::encode($data->commentsEnabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acceptMultipleSolutions')); ?>:</b>
	<?php echo CHtml::encode($data->acceptMultipleSolutions); ?>
	<br />

	*/ ?>

</div>