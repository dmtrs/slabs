<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cs_name'); ?>
		<?php echo $form->textField($model,'cs_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cs_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cs_phone'); ?>
		<?php echo $form->textField($model,'cs_phone',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cs_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cs_email'); ?>
		<?php echo $form->textField($model,'cs_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cs_email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->