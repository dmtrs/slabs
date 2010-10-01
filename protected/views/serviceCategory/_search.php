<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sc_id'); ?>
		<?php echo $form->textField($model,'sc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_descr'); ?>
		<?php echo $form->textField($model,'sc_descr',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->