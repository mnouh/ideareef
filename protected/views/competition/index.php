<?php
$this->breadcrumbs=array(
	'Competitions',
);

$this->menu=array(
	array('label'=>'Create Competition', 'url'=>array('create')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>Competitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
