<?php
/* @var $this BatchSubjectsTimeController */
/* @var $model BatchSubjectsTime */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batch-subjects-time-form',
	'enableAjaxValidation'=>false,
	
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	   
	     <table>
		 
		 <tr><div class="row">
		<td><?php echo $form->labelEx($model,'batch_id'); ?></td>
		<td><?php echo CHtml::activeDropDownList($model,'batch_id',CHtml::listData( Batches::model()->findAll(), 'batch_id' ,'batch_name'), array('prompt'=>'Select Batch')) ?></td>
		<td><?php echo $form->error($model,'batch_id'); ?></td>
		</div></tr>
	
	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'class_id'); ?></td>
		<td><?php
                  $classArray = CHtml::listData(Classes::model()->findAll(),'id','class_name');
                   echo $form->DropDownList($model,'class_id',$classArray,
                            array(
                                'ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('batchSubjectsTime/dynamicSubjects'),
                                'update'=>'#'.CHtml::activeId($model,'sub_id')
                                 )));
		?></td>
        <td><?php echo $form->error($model,'class_id'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'sub_id'); ?></td>
		<td><?php echo $form->dropDownList($model,'sub_id',array()); ?></td>
		<td><?php echo $form->error($model,'sub_id'); ?></td>
	</div></tr>
	


	<tr><div class="row">
		<td>Board</td>
		<td><?php echo CHtml::activeDropDownList($model,'board',CHtml::listData(Board::model()->findAll(), 'id' ,'board_name'), array('prompt'=>'Select Board '));?>		<?php echo $form->error($model,'board'); ?></td>
	</div></tr>
		
	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'bs_time'); ?></td>
		<td><?php echo $form->textField($model,'bs_time'); ?></td>
		<td><?php echo $form->error($model,'bs_time'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'bs_day'); ?></td>
		<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[S_dob]',
								'model'=>$model,
								'attribute'=>'bs_day',
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
		<td><?php echo $form->error($model,'bs_day'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'created_at'); ?></td>
		<td><?php echo $form->textField($model,'created_at'); ?></td>
		<td><?php echo $form->error($model,'created_at'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'updated_at'); ?></td>
		<td><?php echo $form->textField($model,'updated_at'); ?></td>
		<td><?php echo $form->error($model,'updated_at'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'deleted_at'); ?></td>
		<td><?php echo $form->textField($model,'deleted_at'); ?></td>
		<td><?php echo $form->error($model,'deleted_at'); ?></td>
	</div></tr>

	

	<tr><div class="row buttons">
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</div></tr>

<?php $this->endWidget(); ?>

</div><!-- form -->