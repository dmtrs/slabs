<?php
$this->breadcrumbs=array(
	'Prioritys'=>array('index'),
	$model->py_id=>array('view','id'=>$model->py_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Priority', 'url'=>array('index')),
	array('label'=>'Create Priority', 'url'=>array('create')),
	array('label'=>'View Priority', 'url'=>array('view', 'id'=>$model->py_id)),
	array('label'=>'Manage Priority', 'url'=>array('admin')),
);
?>

<h1>Update Priority <?php echo $model->py_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>