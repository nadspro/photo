<?php
/* @var $this SubSubTopicController */
/* @var $data SubSubTopic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_topic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_topic_name')); ?>:</b>
	<?php echo CHtml::encode($data->sub_topic_name); ?>
	<br />


</div>