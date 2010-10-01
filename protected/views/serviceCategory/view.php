<?php
$this->breadcrumbs=array(
	'Service Categories'=>array('index'),
	$model->sc_id,
);

$this->menu=array(
	array('label'=>'List ServiceCategory', 'url'=>array('index')),
	array('label'=>'Create ServiceCategory', 'url'=>array('create')),
	array('label'=>'Update ServiceCategory', 'url'=>array('update', 'id'=>$model->sc_id)),
	array('label'=>'Delete ServiceCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServiceCategory', 'url'=>array('admin')),
);
?>

<h1>View ServiceCategory #<?php echo $model->sc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sc_id',
		'sc_descr',
	),
)); ?>
