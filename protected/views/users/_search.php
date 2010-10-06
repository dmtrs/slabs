<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'us_id'); ?>
		<?php echo $form->textField($model,'us_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_username'); ?>
		<?php echo $form->textField($model,'us_username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_fullname'); ?>
		<?php echo $form->textField($model,'us_fullname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_passwd'); ?>
		<?php echo $form->textField($model,'us_passwd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'us_email'); ?>
		<?php echo $form->textField($model,'us_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->