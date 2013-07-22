<?php
/* @var $this SubSubTopicController */
/* @var $model SubSubTopic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-sub-topic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_topic_id'); ?>
		<?php echo $form->textField($model,'sub_topic_id'); ?>
		<?php echo $form->error($model,'sub_topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_topic_name'); ?>
		<?php echo $form->textField($model,'sub_topic_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sub_topic_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->