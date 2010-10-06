<?php
$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->se_id,
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Create Service', 'url'=>array('create')),
	array('label'=>'Update Service', 'url'=>array('update', 'id'=>$model->se_id)),
	array('label'=>'Delete Service', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->se_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Service', 'url'=>array('admin')),
);
?>

<h1>View Service #<?php echo $model->se_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'se_id',
		'se_description',
		'se_serialnumber',
		'ps_id',
	),
)); ?>
