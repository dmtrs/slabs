<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rp_date'); ?>
		<?php echo $form->textField($model,'rp_date'); ?>
		<?php echo $form->error($model,'rp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_id'); ?>
		<?php echo $form->textField($model,'is_id'); ?>
		<?php echo $form->error($model,'is_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rp_report'); ?>
		<?php echo $form->textArea($model,'rp_report',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rp_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
		<?php echo $form->error($model,'st_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->