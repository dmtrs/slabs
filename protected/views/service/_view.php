<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->se_id), array('view', 'id'=>$data->se_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_description')); ?>:</b>
	<?php echo CHtml::encode($data->se_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_serialnumber')); ?>:</b>
	<?php echo CHtml::encode($data->se_serialnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_id')); ?>:</b>
	<?php echo CHtml::encode($data->ps_id); ?>
	<br />


</div>