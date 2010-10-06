<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('py_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->py_id), array('view', 'id'=>$data->py_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('py_description')); ?>:</b>
	<?php echo CHtml::encode($data->py_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('py_color')); ?>:</b>
	<?php echo CHtml::encode($data->py_color); ?>
	<br />


</div>