<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rp_id), array('view', 'id'=>$data->rp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_date')); ?>:</b>
	<?php echo CHtml::encode($data->rp_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_code')); ?>:</b>
	<?php echo CHtml::encode($data->is_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_report')); ?>:</b><br/>
	<?php echo nl2br(CHtml::encode($data->rp_report)); ?>
	<br />

	<?php	if(isset($data->rp_comment)) 
		{
			echo "<br />";
			echo CHtml::encode($data->getAttributeLabel('rp_comment')); ?>:</b><br/>
			<?php echo nl2br(CHtml::encode($data->rp_comment));
			echo "<br />";
		} ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::encode($data->st_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('us_name')); ?>:</b>
	<?php echo CHtml::encode($data->us_name); ?>
	<br />


</div>
