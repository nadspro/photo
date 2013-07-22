<?php
/* @var $this SubSectionController */
/* @var $model SubSection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-section-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
	
	    <table>
	<tr><div class="row">
		<td><?php echo $form->labelEx($model,'class_id'); ?></td>
		<td><?php
                  $classArray = CHtml::listData(Classes::model()->findAll(),'id','class_name');
                   echo $form->DropDownList($model,'class_id',$classArray,
                            array(
                                'ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('SubSection/dynamicSubjects'),
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
		<td><?php echo $form->labelEx($model,'section_name'); ?></td>
		<td><?php echo $form->textField($model,'section_name',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'section_name'); ?></td>
	</div></tr>

	<tr><div class="row buttons">
    	<td></td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
	</div></tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->