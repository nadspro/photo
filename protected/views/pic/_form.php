<?php
/* @var $this PicController */
/* @var $model Pic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pic-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<h3>Image Details</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php /*?><tr>
    <td><?php echo $form->labelEx($model,'photo_file_name'); ?></td>
    <td><?php echo $form->hiddenField($model,'photo_file_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'photo_file_name'); ?></td>
    <td><?php echo $form->labelEx($model,'photo_content_type'); ?>
		</td>
    <td><?php echo $form->hiddenField($model,'photo_content_type',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'photo_content_type'); ?></td>
  </tr><?php */?>
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
		echo CHtml::link('Remove', array('Pic/remove', 'id'=>$model->primaryKey)); 
    echo '<img class="imgbrder" src="'.$this->createUrl('Pic/DisplaySavedImage&id='.$model->primaryKey).'" alt="'.$model->photo_file_name.'" width="100" height="100" />';	
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->