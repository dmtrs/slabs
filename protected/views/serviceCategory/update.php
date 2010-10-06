<?php
$this->breadcrumbs=array(
	'Service Categories'=>array('index'),
	$model->sc_id=>array('view','id'=>$model->sc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ServiceCategory', 'url'=>array('index')),
	array('label'=>'Create ServiceCategory', 'url'=>array('create')),
	array('label'=>'View ServiceCategory', 'url'=>array('view', 'id'=>$model->sc_id)),
	array('label'=>'Manage ServiceCategory', 'url'=>array('admin')),
);
?>

<h1>Update ServiceCategory <?php echo $model->sc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>