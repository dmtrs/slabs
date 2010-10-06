<?php
$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->st_id=>array('view','id'=>$model->st_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'View Status', 'url'=>array('view', 'id'=>$model->st_id)),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>Update Status <?php echo $model->st_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>