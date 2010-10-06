<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'se_description'); ?>
		<?php echo $form->textField($model,'se_description',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'se_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'se_serialnumber'); ?>
		<?php echo $form->textField($model,'se_serialnumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'se_serialnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ps_id'); ?>
		<?php echo $form->textField($model,'ps_id'); ?>
		<?php echo $form->error($model,'ps_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->