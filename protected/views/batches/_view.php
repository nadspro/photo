<?php
/* @var $this BatchesController */
/* @var $data Batches */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->batch_id), array('view', 'id'=>$data->batch_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch_name')); ?>:</b>
	<?php echo CHtml::encode($data->batch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_batch_name')); ?>:</b>
	<?php echo CHtml::encode($data->sub_batch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_students')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_students); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class')); ?>:</b>
	<?php echo CHtml::encode($data->class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('board')); ?>:</b>
	<?php echo CHtml::encode($data->board); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school')); ?>:</b>
	<?php echo CHtml::encode($data->school); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enddate')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_at')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_at); ?>
	<br />

	*/ ?>

</div>