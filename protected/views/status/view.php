<?php
$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->st_id,
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Update Status', 'url'=>array('update', 'id'=>$model->st_id)),
	array('label'=>'Delete Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->st_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>View Status #<?php echo $model->st_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'st_id',
		'st_descr',
		'st_color',
	),
)); ?>
