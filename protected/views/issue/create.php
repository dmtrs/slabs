<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index')),
	array('label'=>'Manage Issue', 'url'=>array('admin')),
);
?>

<h1>Create Issue</h1>
<?php $this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => array( 
		'Issue details'=>$this->renderPartial('_form', array('model'=>$model),true),
		'Service parts'=>'Coming soon: service/create form.',
		'options' => array(
			'collapsible' => true,),
))); ?>
<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>
