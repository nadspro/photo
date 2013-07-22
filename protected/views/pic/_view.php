<?php
/* @var $this PicController */
/* @var $data Pic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_file_name')); ?>:</b>
	<?php echo CHtml::encode($data->photo_file_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_content_type')); ?>:</b>
	<?php echo CHtml::encode($data->photo_content_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_data')); ?>:</b>
	<?php echo CHtml::encode($data->photo_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_file_size')); ?>:</b>
	<?php echo CHtml::encode($data->photo_file_size); ?>
	<br />


</div>