<?php
/* @var $this TransferController */
/* @var $model Transfer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transfer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_id'); ?>
		<?php echo $form->textField($model,'s_id'); ?>
		<?php echo $form->error($model,'s_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_name'); ?>
		<?php echo $form->textField($model,'s_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'s_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_'); ?>
		<?php echo $form->textField($model,'from_',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'from_'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_'); ?>
		<?php echo $form->textField($model,'to_',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'to_'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'absent_inform'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'model'=>$model,
								'attribute'=>'absent_inform',
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
 			?>
		<?php echo $form->error($model,'absent_inform'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'present'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'model'=>$model,
								'attribute'=>'present',
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
 			?>
		<?php echo $form->error($model,'present'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'model'=>$model,
								'attribute'=>'date',
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
 			?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->