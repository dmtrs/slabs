<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'py_id'); ?>
		<?php echo $form->textField($model,'py_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'py_description'); ?>
		<?php echo $form->textField($model,'py_description',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'py_color'); ?>
		<?php echo $form->textField($model,'py_color',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->