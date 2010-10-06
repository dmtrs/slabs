<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ps_id'); ?>
		<?php echo $form->textField($model,'ps_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ps_name'); ?>
		<?php echo $form->textField($model,'ps_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ps_phone'); ?>
		<?php echo $form->textField($model,'ps_phone',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ps_email'); ?>
		<?php echo $form->textField($model,'ps_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->