<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'us_username'); ?>
		<?php echo $form->textField($model,'us_username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'us_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_fullname'); ?>
		<?php echo $form->textField($model,'us_fullname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'us_fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_passwd'); ?>
		<?php echo $form->passwordField($model,'us_passwd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'us_passwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'us_email'); ?>
		<?php echo $form->textField($model,'us_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'us_email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
