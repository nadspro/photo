<?php
/* @var $this SubjectsController */
/* @var $model Subjects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subjects-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php
                  $classArray = CHtml::listData(Classes::model()->findAll(),'id','class_name');
                   echo $form->DropDownList($model,'class',$classArray,
                            array(
                                'ajax' => array(
                                'type'=>'POST',
                                //'url'=>CController::createUrl('Preadmission/dynamicBatch'),
                                //'update'=>'#'.CHtml::activeId($model,'batch_id')
                                 )));

            ?>

		<?php echo $form->error($model,'class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'board'); ?>
		<?php echo $form->textField($model,'board',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'board'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->