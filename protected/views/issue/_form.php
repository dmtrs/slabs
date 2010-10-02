<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'issue-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
	<?php echo $form->labelEx($model,'is_code'); ?>
	<?php echo $form->textField($model,'is_code',array('size'=>30,'maxlength'=>30)); ?>
	<?php echo $form->error($model,'is_code'); ?>
    </div>

    <div class="row">
	<?php 
            echo $form->labelEx($model,'sc_id'); 
            $categories = ServiceCategory::model()->findAll();
            $list = CHtml::listData($categories,'sc_id','sc_descr');
            echo $form->dropDownList($model,'sc_id',$list); ?>
	<?php echo $form->error($model,'sc_id'); ?>
    </div>

    <div class="row">
	<?php echo $form->labelEx($model,'se_id'); ?>
	<?php echo $form->textField($model,'se_id'); ?>
	<?php echo $form->error($model,'se_id'); ?>
    </div>

    <div class="row">
	<?php echo $form->labelEx($model,'is_title'); ?>
	<?php echo $form->textField($model,'is_title',array('size'=>20,'maxlength'=>20)); ?>
	<?php echo $form->error($model,'is_title'); ?>
    </div>

    <div class="row">
	<?php echo $form->labelEx($model,'is_report'); ?>
	<?php echo $form->textArea($model,'is_report',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo $form->error($model,'is_report'); ?>
    </div>

    <div class="row">
	<?php 
            echo $form->labelEx($model,'py_id'); 
            $categories = Priority::model()->findAll();
            $list = CHtml::listData($categories,'py_id','py_description');
            echo $form->dropDownList($model,'py_id',$list); ?>
	<?php echo $form->error($model,'py_id'); ?>
    </div>

    <div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
