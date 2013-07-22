<?php
/* @var $this SubTopicController */
/* @var $data SubTopic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_id')); ?>:</b>
	<?php echo CHtml::encode($data->class_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_section_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_section_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_name')); ?>:</b>
	<?php echo CHtml::encode($data->topic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration_hours')); ?>:</b>
	<?php echo CHtml::encode($data->duration_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prof_id')); ?>:</b>
	<?php echo CHtml::encode($data->prof_id); ?>
	<br />


</div>