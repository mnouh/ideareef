<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">
<?php
/*$this->breadcrumbs=array(
	'Competitions'=>array('index'),
	'Create',
);
*/
$this->menu=array(
	array('label'=>'List Competition', 'url'=>array('index')),
	array('label'=>'Manage Competition', 'url'=>array('admin')),
);
?>

<h1>Create Competition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>
</div>