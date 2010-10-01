<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'se_id'); ?>
		<?php echo $form->textField($model,'se_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'se_description'); ?>
		<?php echo $form->textField($model,'se_description',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'se_serialnumber'); ?>
		<?php echo $form->textField($model,'se_serialnumber',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ps_id'); ?>
		<?php echo $form->textField($model,'ps_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->