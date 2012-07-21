<?php
$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'View Competition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>Update Competition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>