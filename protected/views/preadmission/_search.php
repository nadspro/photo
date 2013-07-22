<?php
/* @var $this PreadmissionController */
/* @var $model Preadmission */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'id'); ?>
		Id  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		&nbsp; &nbsp; &nbsp; <?php //echo $form->label($model,'S_fname'); ?>
		Students First Name &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_fname',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_mname'); ?>
		Students Middle Name &nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_mname',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_lname'); ?>
		Students Last Name &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_lname',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_class'); ?>
		Class &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_class'); ?>&nbsp; &nbsp; &nbsp;
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_school'); ?>
		School &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_school',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'S_school_timings'); ?>
		Timings &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_school_timings',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_dob'); ?>
		Date of Birth &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_dob'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_bg'); ?>
		Blood Group &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_bg',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_gender'); ?>
		Gender &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_gender',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_addr'); ?>
		Address &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_addr',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'S_city'); ?>
		City &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_city',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'S_state'); ?>
		State &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_state',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'S_pincode'); ?>
		Pincode &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_pincode'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'S_telephone'); ?>
		Telephone &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_telephone'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_ph'); ?>
		Phone &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_ph'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'S_email'); ?>
		Student's Email &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'S_email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'sc_id'); ?>
		Subject Combination &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'sc_id'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'p_mom'); ?>
		Mother's Name &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<?php echo $form->textField($model,'p_mom',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'P_offaddrd'); ?>
		Father's Office Address<?php echo $form->textField($model,'P_offaddrd',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'P_offaddrm'); ?>
		Mother's Office Address<?php echo $form->textField($model,'P_offaddrm',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		&nbsp; &nbsp; &nbsp;	<?php //echo $form->label($model,'P_phd'); ?>
		Father's Phone Number<?php echo $form->textField($model,'P_phd'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'P_phm'); ?>
		Mother's Phone Number<?php echo $form->textField($model,'P_phm'); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php //echo $form->label($model,'P_emaild'); ?>
		Father's Email id<?php echo $form->textField($model,'P_emaild',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
			&nbsp; &nbsp; &nbsp;<?php // echo $form->label($model,'P_emailm'); ?>
		Mother's Email Id <?php echo $form->textField($model,'P_emailm',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->