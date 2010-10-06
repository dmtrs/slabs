<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cs_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cs_id), array('view', 'id'=>$data->cs_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cs_name')); ?>:</b>
	<?php echo CHtml::encode($data->cs_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cs_phone')); ?>:</b>
	<?php echo CHtml::encode($data->cs_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cs_email')); ?>:</b>
	<?php echo CHtml::encode($data->cs_email); ?>
	<br />


</div>