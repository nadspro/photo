<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form" align="center">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr1'); ?>
		<?php echo $form->textArea($model,'addr1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'addr1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pincode'); ?>
		<?php echo $form->textField($model,'pincode'); ?>
		<?php echo $form->error($model,'pincode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ph'); ?>
		<?php echo $form->textField($model,'ph'); ?>
		<?php echo $form->error($model,'ph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joiningdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[dob]',
								'model'=>$model,
								'attribute'=>'joiningdate',
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
 ?>
		<?php echo $form->error($model,'joiningdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->dropDownList($model,'Gender',array('M' => 'Male', 'F' => 'Female'),array('empty' => 'Select a gender')); ?>
		<?php echo $form->error($model,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification'); ?>
		<?php echo $form->textField($model,'qualification',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'qualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experienceyears'); ?>
		<?php echo $form->textField($model,'experienceyears'); ?>
		<?php echo $form->error($model,'experienceyears'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[dob]',
								'model'=>$model,
								'attribute'=>'dob',
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
 ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital_status'); ?>
		<?php echo $form->textField($model,'marital_status',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bg'); ?>
		<?php echo $form->dropDownList($model,'bg',
		 							array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+-' => 'AB+', 'AB-' => 'AB-'),
									array('empty' => 'Select BloodGroup'));
 ?>
		<?php echo $form->error($model,'bg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailid'); ?>
		<?php echo $form->textField($model,'emailid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emailid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offph'); ?>
		<?php echo $form->textField($model,'offph'); ?>
		<?php echo $form->error($model,'offph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Created_at'); ?>
		<?php echo $form->textField($model,'Created_at'); ?>
		<?php echo $form->error($model,'Created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Updated_at'); ?>
		<?php echo $form->textField($model,'Updated_at'); ?>
		<?php echo $form->error($model,'Updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_id'); ?>
		<?php echo $form->textField($model,'User_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'User_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Is_deleted'); ?>
		<?php echo $form->textField($model,'Is_deleted'); ?>
		<?php echo $form->error($model,'Is_deleted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->