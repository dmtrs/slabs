<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rp_id), array('view', 'id'=>$data->rp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_date')); ?>:</b>
	<?php echo CHtml::encode($data->rp_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_id')); ?>:</b>
	<?php echo CHtml::encode($data->is_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_report')); ?>:</b>
	<?php echo CHtml::encode($data->rp_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::encode($data->st_id); ?>
	<br />


</div>