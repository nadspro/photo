<?php
/* @var $this SubSubTopicController */
/* @var $model SubSubTopic */
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
		<?php echo $form->label($model,'sub_topic_id'); ?>
		<?php echo $form->textField($model,'sub_topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_topic_name'); ?>
		<?php echo $form->textField($model,'sub_topic_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->