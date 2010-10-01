<?php
$this->breadcrumbs=array(
	'Prioritys'=>array('index'),
	$model->py_id,
);

$this->menu=array(
	array('label'=>'List Priority', 'url'=>array('index')),
	array('label'=>'Create Priority', 'url'=>array('create')),
	array('label'=>'Update Priority', 'url'=>array('update', 'id'=>$model->py_id)),
	array('label'=>'Delete Priority', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->py_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Priority', 'url'=>array('admin')),
);
?>

<h1>View Priority #<?php echo $model->py_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'py_id',
		'py_description',
		'py_color',
	),
)); ?>
