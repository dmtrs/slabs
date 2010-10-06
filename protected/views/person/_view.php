<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ps_id), array('view', 'id'=>$data->ps_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_name')); ?>:</b>
	<?php echo CHtml::encode($data->ps_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_phone')); ?>:</b>
	<?php echo CHtml::encode($data->ps_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_email')); ?>:</b>
	<?php echo CHtml::encode($data->ps_email); ?>
	<br />


</div>