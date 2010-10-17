<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rp_report'); ?>
		<?php echo $form->textArea($model,'rp_report',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rp_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rp_comment'); ?>
		<?php echo $form->textArea($model,'rp_comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rp_comment'); ?>
	</div>

	<div class="row">
		<?php 	echo $form->labelEx($model,'st_id'); 
			$st = Status::model()->findAll();
			//Use CDbCriteria to remove Open status
			$list = CHtml::listData($st,'st_id','st_descr');
			echo $form->dropDownList($model,'st_id',$list,array('empty'=>'Select...')); ?>
		<?php echo $form->error($model,'st_id'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
