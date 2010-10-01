<?php
$this->breadcrumbs=array(
	'Persons'=>array('index'),
	$model->cs_id,
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model->cs_id)),
	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cs_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>View Person #<?php echo $model->cs_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cs_id',
		'cs_name',
		'cs_phone',
		'cs_email',
	),
)); ?>
