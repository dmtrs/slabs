<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rp_id'); ?>
		<?php echo $form->textField($model,'rp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_date'); ?>
		<?php echo $form->textField($model,'rp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_code'); ?>
		<?php echo $form->textField($model,'is_code',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_report'); ?>
		<?php echo $form->textArea($model,'rp_report',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_name'); ?>
		<?php echo $form->textField($model,'us_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->