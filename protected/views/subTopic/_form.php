<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-topic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'class_id'); ?>
		<?php
                  $classArray = CHtml::listData(Classes::model()->findAll(),'id','class_name');
                   echo $form->DropDownList($model,'class_id',$classArray,
                            array(
							    'prompt'=>'Select Class',
                                'ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('SubTopic/dynamicSubjects'),
                                'update'=>'#'.CHtml::activeId($model,'sub_id')
                                 )));
		$subArray = array();
		?>
        <?php echo $form->error($model,'class_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_id'); ?>
		<?php echo $form->DropDownList($model,'sub_id',$subArray,array(
																	'prompt'=>'Select Subject',
	    															'ajax' => array(
																	'type'=>'POST',
																	'url'=>CController::createUrl('SubTopic/dynamicSubSection'),
																	'update'=>'#'.CHtml::activeId($model,'sub_section_id')	
																))); ?>
		<?php echo $form->error($model,'sub_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_section_id'); ?>
		<?php echo $form->dropDownList($model,'sub_section_id',array()); ?>
		<?php echo $form->error($model,'sub_section_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topic_name'); ?>
		<?php echo $form->textField($model,'topic_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'topic_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration_hours'); ?>
		<?php echo $form->textField($model,'duration_hours'); ?>
		<?php echo $form->error($model,'duration_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prof_id'); ?>
		<?php echo $form->textField($model,'prof_id'); ?>
		<?php echo $form->error($model,'prof_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->