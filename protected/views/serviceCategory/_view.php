<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sc_id), array('view', 'id'=>$data->sc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_descr')); ?>:</b>
	<?php echo CHtml::encode($data->sc_descr); ?>
	<br />


</div>