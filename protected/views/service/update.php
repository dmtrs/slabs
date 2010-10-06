<?php
$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->se_id=>array('view','id'=>$model->se_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Create Service', 'url'=>array('create')),
	array('label'=>'View Service', 'url'=>array('view', 'id'=>$model->se_id)),
	array('label'=>'Manage Service', 'url'=>array('admin')),
);
?>

<h1>Update Service <?php echo $model->se_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>