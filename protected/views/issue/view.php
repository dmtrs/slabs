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
	<?php if($model->_reportCount>=1): ?>
        <h3>
        	<?php echo $model->_reportCount . ' report(s)'; ?>
        </h3>
 
	<?php $this->renderPartial('_reports',array(
        	'issue'=>$model,
        	'reports'=>$model->reports,
	)); ?>
	<?php endif; ?>

	<?php if(Yii::app()->user->hasFlash('reportF')): ?>
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('reportF'); ?>
		</div>
	<?php endif; ?>
	<h3>Add report. </h3>
		<?php $this->renderPartial('/report/_form',
		array('model'=>$report));?>

</div>
