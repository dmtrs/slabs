<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_descr'); ?>
		<?php echo $form->textField($model,'sc_descr',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sc_descr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->