<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cs_id'); ?>
		<?php echo $form->textField($model,'cs_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cs_name'); ?>
		<?php echo $form->textField($model,'cs_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cs_phone'); ?>
		<?php echo $form->textField($model,'cs_phone',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cs_email'); ?>
		<?php echo $form->textField($model,'cs_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->