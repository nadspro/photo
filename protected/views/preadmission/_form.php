<?php
/* @var $this PreadmissionController */
/* @var $model Preadmission */
/* @var $form CActiveForm */
?>

<div class="form" align="center">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preadmission-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>



	<div class="row" >
		<?php echo $form->labelEx($model,'S_fname'); ?>
		<?php echo $form->textField($model,'S_fname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_mname').$form->textField($model,'S_mname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_lname'); ?>
		<?php echo $form->textField($model,'S_lname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_class'); ?>
		<?php echo CHtml::activeDropDownList($model,'S_class',CHtml::listData( Preadmission::model()->getClassOptions(), 'class' ,'class'), array('prompt'=>'Select Class')) ?>
		<?php echo $form->error($model,'S_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_school'); ?>
		<?php echo $form->textField($model,'S_school',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'S_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_school_timings'); ?>
		<?php echo $form->textField($model,'S_school_timings',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'S_school_timings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_dob'); ?>
		
		
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								//'name'=>'Students[S_dob]',
								'model'=>$model,
								'attribute'=>'S_dob',
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
		<?php echo $form->error($model,'S_dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_bg'); ?>
		<?php echo $form->dropDownList($model,'S_bg',
		 							array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+-' => 'AB+', 'AB-' => 'AB-'),
									array('empty' => 'Select BloodGroup'));
 ?>
		<?php echo $form->error($model,'S_bg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_gender'); ?>
		<?php echo $form->dropDownList($model,'S_gender',array('M' => 'Male', 'F' => 'Female'),array('empty' => 'Select a gender')); ?>
		<?php echo $form->error($model,'S_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_addr'); ?>
		<?php echo $form->textField($model,'S_addr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_city'); ?>
		<?php echo $form->textField($model,'S_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_state'); ?>
		<?php echo $form->textField($model,'S_state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_pincode'); ?>
		<?php echo $form->textField($model,'S_pincode'); ?>
		<?php echo $form->error($model,'S_pincode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_telephone'); ?>
		<?php echo $form->textField($model,'S_telephone'); ?>
		<?php echo $form->error($model,'S_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_ph'); ?>
		<?php echo $form->textField($model,'S_ph'); ?>
		<?php echo $form->error($model,'S_ph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'S_email'); ?>
		<?php echo $form->textField($model,'S_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'S_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_id'); ?>
		<?php echo $form->textField($model,'sc_id'); ?>
		<?php echo $form->error($model,'sc_id'); ?>
	</div>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    <td><?php 
	if($model->photo_data==NULL)
	echo $form->labelEx($model,'photo_data');
	else
	echo $form->labelEx($model,'Photo'); ?>
		</td>
    <td><?php 
	if($model->photo_data==NULL) {
	echo $form->fileField($model,'photo_data'); ?>
		<?php echo $form->error($model,'photo_data'); }
		else
		{
		echo CHtml::link('Remove', array('Preadmission/remove', 'id'=>$model->primaryKey)); 
    echo '<img class="imgbrder" src="'.$this->createUrl('Preadmission/DisplaySavedImage&id='.$model->primaryKey).'" alt="'.$model->photo_file_name.'" width="100" height="100" />';	
		}
		 ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

	<div class="row">
		<?php //echo $form->labelEx($model,'photo_file_size'); ?>
		<?php echo $form->hiddenField($model,'photo_file_size'); ?>
		<?php echo $form->error($model,'photo_file_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_mom'); ?>
		<?php echo $form->textField($model,'p_mom',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_mom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_offaddrd'); ?>
		<?php echo $form->textField($model,'P_offaddrd',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'P_offaddrd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_offaddrm'); ?>
		<?php echo $form->textField($model,'P_offaddrm',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'P_offaddrm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_phd'); ?>
		<?php echo $form->textField($model,'P_phd'); ?>
		<?php echo $form->error($model,'P_phd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_phm'); ?>
		<?php echo $form->textField($model,'P_phm'); ?>
		<?php echo $form->error($model,'P_phm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_emaild'); ?>
		<?php echo $form->textField($model,'P_emaild',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'P_emaild'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_emailm'); ?>
		<?php echo $form->textField($model,'P_emailm',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'P_emailm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->