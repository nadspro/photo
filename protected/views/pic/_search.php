<?php
/* @var $this PicController */
/* @var $model Pic */
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
		<?php echo $form->label($model,'photo_file_name'); ?>
		<?php echo $form->textField($model,'photo_file_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_content_type'); ?>
		<?php echo $form->textField($model,'photo_content_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_data'); ?>
		<?php echo $form->textField($model,'photo_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_file_size'); ?>
		<?php echo $form->textField($model,'photo_file_size'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->