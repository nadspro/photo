<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class_id'); ?>
		<?php echo $form->textField($model,'class_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_id'); ?>
		<?php echo $form->textField($model,'sub_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_section_id'); ?>
		<?php echo $form->textField($model,'sub_section_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topic_name'); ?>
		<?php echo $form->textField($model,'topic_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration_hours'); ?>
		<?php echo $form->textField($model,'duration_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prof_id'); ?>
		<?php echo $form->textField($model,'prof_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->