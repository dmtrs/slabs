<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->st_id), array('view', 'id'=>$data->st_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_descr')); ?>:</b>
	<?php echo CHtml::encode($data->st_descr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_color')); ?>:</b>
	<?php echo CHtml::encode($data->st_color); ?>
	<br />


</div>