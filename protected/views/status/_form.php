<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'st_descr'); ?>
		<?php echo $form->textField($model,'st_descr',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'st_descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_color'); ?>
		<?php echo $form->textField($model,'st_color',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'st_color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->