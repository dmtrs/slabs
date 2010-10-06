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
            echo $form->dropDownList($model,'sc_id',$list,array('empty'=>'Select..')); ?>
	<?php echo $form->error($model,'sc_id'); ?>
    </div>

    <div class="row">
	<?php echo $form->labelEx($model,'is_title'); ?>
	<?php echo $form->textField($model,'is_title',array('size'=>25,'maxlength'=>25)); ?>
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
            echo $form->dropDownList($model,'py_id',$list,array('empty'=>'Select...')); ?>
	<?php echo $form->error($model,'py_id'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'ps_id'); 
		$this->widget('CAutoComplete',
        	array(
                         //name of the html field that will be generated
			'name'=>'ps_name', 
                         //replace controller/action with real ids
			'url'=>array('person/lookup'), 
			'max'=>10, //specifies the max number of items to display
 
                         //specifies the number of chars that must be entered 
                         //before autocomplete initiates a lookup
			'minChars'=>2, 
			'delay'=>500, //number of milliseconds before lookup occurs
			'matchCase'=>false, //match case when performing a lookup?
 
                         //any additional html attributes that go inside of 
                         //the input field can be defined here
			'htmlOptions'=>array('size'=>'40'), 
 
			'methodChain'=>".result(function(event,item){\$(\"#Issue_ps_id\").val(item[1]);})",
		));
	?>
	<?php echo $form->hiddenField($model,'ps_id'); ?>
	<?php echo $form->error($model,'ps_id'); ?>
    </div>
    <div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
