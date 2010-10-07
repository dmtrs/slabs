<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->us_id), array('view', 'id'=>$data->us_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_username')); ?>:</b>
	<?php echo CHtml::encode($data->us_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->us_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_passwd')); ?>:</b>
	<?php echo CHtml::encode($data->us_passwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_email')); ?>:</b>
	<?php echo CHtml::encode($data->us_email); ?>
	<br />


</div>