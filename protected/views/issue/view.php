<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->is_id,
);

$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index')),
	array('label'=>'Create Issue', 'url'=>array('create')),
	array('label'=>'Update Issue', 'url'=>array('update', 'id'=>$model->is_id)),
	array('label'=>'Delete Issue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->is_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Issue', 'url'=>array('admin')),
);
?>

<h1>View Issue #<?php echo $model->is_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'is_id',
		'is_code',
		'sc.sc_descr',
		'st.st_descr',
		'is_title',
		'is_report',
		'py.py_description',
		'is_create_date',
		'is_last_report',
		'us.us_fullname',
	),
)); ?>
<div id="reports">
</div>
