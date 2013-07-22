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
	
	
	<table><tr>
	<div class="row" align="justify" >
	<td>Student's Name <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_fname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_fname'); ?>
	
		<?php echo $form->textField($model,'S_mname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_mname'); ?>
	
		<?php echo $form->textField($model,'S_lname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'S_lname'); ?></td>
	</div></tr>
<tr>
	<div class="row" align="justify">
		<td>Class <font color="#FF0000" >*</font></td>
		<td><?php //echo CHtml::activeDropDownList($model,'S_class',CHtml::listData( Preadmission::model()->getClassOptions(), 'class' ,'class'), array('prompt'=>'Select Class')) ?><?php
                  $classArray = CHtml::listData(Classes::model()->findAll(),'id','class_name');
                   echo $form->DropDownList($model,'class_id',$classArray,
                            array(
                                'ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('Preadmission/dynamicBatch'),
                                'update'=>'#'.CHtml::activeId($model,'batch_id')
                                 )));

            ?>
		<?php echo $form->error($model,'S_class'); ?></td>
	</div></tr>

	<tr><div class="row">
		<td>School Name <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_school',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'S_school'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>School Timings <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_school_timings',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'S_school_timings'); ?></td>
	</div></tr>
	
	
	
<tr>
	<div class="row">
		<td>Date of Birth <font color="#FF0000" >*</font></td>
		
		
		<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
		<?php echo $form->error($model,'S_dob'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Blood Group <font color="#FF0000" >*</font></td>
		<td><?php echo $form->dropDownList($model,'S_bg',
		 							array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+-' => 'AB+', 'AB-' => 'AB-'),
									array('empty' => 'Select BloodGroup'));
 ?>
		<?php echo $form->error($model,'S_bg'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Gender <font color="#FF0000" >*</font></td>
		<td><?php echo $form->dropDownList($model,'S_gender',array('M' => 'Male', 'F' => 'Female'),array('empty' => 'Select a gender')); ?>
		<?php echo $form->error($model,'S_gender'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Address <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textArea($model,'S_addr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_addr'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>City <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_city'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>State <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'S_state'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Pincode <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_pincode'); ?>
		<?php echo $form->error($model,'S_pincode'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Telephone <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_telephone'); ?>
		<?php echo $form->error($model,'S_telephone'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Phone <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_ph'); ?>
		<?php echo $form->error($model,'S_ph'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Email id <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'S_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'S_email'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Subject Combination <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'sc_id'); ?>
		<?php echo $form->error($model,'sc_id'); ?></td>
	</div></tr>
	

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
   
<tr>
	<div class="row">
		<?php //echo $form->labelEx($model,'photo_file_size'); ?>
		<td><?php echo $form->hiddenField($model,'photo_file_size'); ?>
		<?php echo $form->error($model,'photo_file_size'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Mother's Name <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'p_mom',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_mom'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Mother's Office Address <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_offaddrd',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'P_offaddrd'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Father's Office Address <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_offaddrm',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'P_offaddrm'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Father's Phone No. <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_phd'); ?>
		<?php echo $form->error($model,'P_phd'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Mother's Phone No. <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_phm'); ?>
		<?php echo $form->error($model,'P_phm'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Father's Email Id <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_emaild',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'P_emaild'); ?></td>
	</div></tr>
<tr>
	<div class="row">
		<td>Mother's Email Id <font color="#FF0000" >*</font></td>
		<td><?php echo $form->textField($model,'P_emailm',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'P_emailm'); ?></td>
	</div></tr>
	
	
	<tr><?php // BATCH ADDED ?>
	<div class="row">
		<td>Select Batch <font color="#FF0000" >*</font></td>
<td><?php //echo CHtml::activeDropDownList(Batch::model(),'Batch_name',CHtml::listData(Batch::model()->getBatch(), 'Batch_name' ,'Batch_name'), array('prompt'=>'Select Batch Name '));?> <?php

                      echo $form->dropDownList($model,'batch_id',array());
            ?>
		
	</div></tr>
<tr>
	<div class="row buttons">
	<td>&nbsp;</td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</div></tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->