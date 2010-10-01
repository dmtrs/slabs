<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->is_id=>array('view','id'=>$model->is_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index')),
	array('label'=>'Create Issue', 'url'=>array('create')),
	array('label'=>'View Issue', 'url'=>array('view', 'id'=>$model->is_id)),
	array('label'=>'Manage Issue', 'url'=>array('admin')),
);
?>

<h1>Update Issue <?php echo $model->is_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>