<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'is_id'); ?>
		<?php echo $form->textField($model,'is_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_code'); ?>
		<?php echo $form->textField($model,'is_code',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_id'); ?>
		<?php echo $form->textField($model,'sc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_date'); ?>
		<?php echo $form->textField($model,'is_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'se_id'); ?>
		<?php echo $form->textField($model,'se_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_title'); ?>
		<?php echo $form->textField($model,'is_title',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_report'); ?>
		<?php echo $form->textArea($model,'is_report',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'py_id'); ?>
		<?php echo $form->textField($model,'py_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->