<?php
/* @var $this BatchDaysController */
/* @var $model BatchDays */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batch-days-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table>
<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'batch_id'); ?></td>
		<td><?php echo CHtml::activeDropDownList($model,'batch_id',CHtml::listData( Batches::model()->findAll(), 'batch_id' ,'batch_name'), array('prompt'=>'Select Batch')) ?></td>
		<td><?php echo $form->error($model,'batch_id'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'monday'); ?></td>
		<td><?php echo $form->checkBox($model,'monday',  array('checked'=>'')); ?></td>
		
		<td><?php echo $form->error($model,'monday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'tuesday'); ?></td>
		<td><?php echo $form->checkBox($model,'tuesday',  array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'tuesday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'wednesday'); ?></td>
		<td><?php echo $form->checkBox($model,'wednesday',  array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'wednesday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'thursday'); ?></td>
		<td><?php echo $form->checkBox($model,'thursday', array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'thursday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'friday'); ?></td>
		<td><?php echo $form->checkBox($model,'friday', array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'friday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'saturday'); ?></td>
		<td><?php echo $form->checkBox($model,'saturday',array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'saturday'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'sunday'); ?></td>
		<td><?php echo $form->checkBox($model,'sunday',array('checked'=>'')); ?></td>
		<td><?php echo $form->error($model,'sunday'); ?></td>
	</div></tr>

	<tr><div class="row buttons">
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</div></tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->