<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_descr'); ?>
		<?php echo $form->textField($model,'st_descr',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_color'); ?>
		<?php echo $form->textField($model,'st_color',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->