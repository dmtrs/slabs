<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'priority-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'py_description'); ?>
		<?php echo $form->textField($model,'py_description',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'py_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'py_color'); ?>
		<?php echo $form->textField($model,'py_color',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'py_color'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->