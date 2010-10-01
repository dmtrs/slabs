<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->is_id), array('view', 'id'=>$data->is_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_code')); ?>:</b>
	<?php echo CHtml::encode($data->is_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_id')); ?>:</b>
	<?php echo CHtml::encode($data->sc_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_date')); ?>:</b>
	<?php echo CHtml::encode($data->is_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_id')); ?>:</b>
	<?php echo CHtml::encode($data->se_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::encode($data->st_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_title')); ?>:</b>
	<?php echo CHtml::encode($data->is_title); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_report')); ?>:</b>
	<?php echo CHtml::encode($data->is_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('py_id')); ?>:</b>
	<?php echo CHtml::encode($data->py_id); ?>
	<br />

	*/ ?>

</div>