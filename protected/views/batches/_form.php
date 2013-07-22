<?php
/* @var $this BatchesController */
/* @var $model Batches */
/* @var $form CActiveForm */
?>

<div class="form">
<table>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batches-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<tr><div class="row">
		<td>Batch Name</td>
		<td><?php echo $form->textField($model,'batch_name',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'batch_name'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td>Sub Batch Name</td>
		<td><?php echo $form->textField($model,'sub_batch_name',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'sub_batch_name'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td>No. Of Students</td>
		<td><?php echo $form->textField($model,'no_of_students'); ?></td>
		<td><?php echo $form->error($model,'no_of_students'); ?></td>
	</div></tr>

	

	<tr><div class="row">
		<td>School Name</td>
		<td><?php echo $form->textField($model,'school',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'school'); ?></td>
	</div></tr>

	

	<tr><div class="row">
		<td>Start Date</td>
			<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[S_dob]',
								'model'=>$model,
								'attribute'=>'startdate',
								// additional javascript options for the date picker plugin
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'yy-mm-dd',
									'changeMonth'=> true,
									'changeYear'=>true,
									'yearRange'=>'1900:'
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));
 ?></td>
		<td><?php echo $form->error($model,'startdate'); ?></td>
	</div></tr>



	<tr><div class="row">
		<td>End Date</td>
		<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[S_dob]',
								'model'=>$model,
								'attribute'=>'enddate',
								// additional javascript options for the date picker plugin
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'yy-mm-dd',
									'changeMonth'=> true,
									'changeYear'=>true,
									'yearRange'=>'1900:'
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));
 ?></td>
		<td><?php echo $form->error($model,'enddate'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'is_active'); ?></td>
		<td><?php echo $form->textField($model,'is_active'); ?></td>
		<td><?php echo $form->error($model,'is_active'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'created_at'); ?></td>
		<td><?php echo $form->textField($model,'created_at'); ?></td>
		<td><?php echo $form->error($model,'created_at'); ?></td>
	</div></tr>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_at'); ?>
		<?php echo $form->textField($model,'deleted_at'); ?>
		<?php echo $form->error($model,'deleted_at'); ?>
	</div>

	<tr><div class="row buttons">
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</div></tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->