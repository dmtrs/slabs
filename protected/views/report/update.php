<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->rp_id=>array('view','id'=>$model->rp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Report', 'url'=>array('index')),
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'View Report', 'url'=>array('view', 'id'=>$model->rp_id)),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>Update Report <?php echo $model->rp_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>