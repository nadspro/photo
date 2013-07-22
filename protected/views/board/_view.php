<?php
/* @var $this BoardController */
/* @var $data Board */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('board_name')); ?>:</b>
	<?php echo CHtml::encode($data->board_name); ?>
	<br />


</div>