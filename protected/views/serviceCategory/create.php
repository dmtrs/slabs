<?php
$this->breadcrumbs=array(
	'Service Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ServiceCategory', 'url'=>array('index')),
	array('label'=>'Manage ServiceCategory', 'url'=>array('admin')),
);
?>

<h1>Create ServiceCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>