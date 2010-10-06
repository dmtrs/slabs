<?php
$this->breadcrumbs=array(
	'Persons'=>array('index'),
	$model->ps_id=>array('view','id'=>$model->ps_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'View Person', 'url'=>array('view', 'id'=>$model->ps_id)),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>Update Person <?php echo $model->ps_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>