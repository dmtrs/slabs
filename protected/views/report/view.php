<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->rp_id,
);

$this->menu=array(
	array('label'=>'List Report', 'url'=>array('index')),
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'Update Report', 'url'=>array('update', 'id'=>$model->rp_id)),
	array('label'=>'Delete Report', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>View Report #<?php echo $model->rp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rp_id',
		'rp_date',
		'is_id',
		'rp_report',
		'st_id',
	),
)); ?>
