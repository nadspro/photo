<?php
/* @var $this BatchSubjectsTimeController */
/* @var $model BatchSubjectsTime */

$this->breadcrumbs=array(
	'Batch Subjects Times'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BatchSubjectsTime', 'url'=>array('index')),
	array('label'=>'Create BatchSubjectsTime', 'url'=>array('create')),
	array('label'=>'Update BatchSubjectsTime', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BatchSubjectsTime', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BatchSubjectsTime', 'url'=>array('admin')),
);
?>

<h1>View BatchSubjectsTime #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'batch_id',
		'class_id',
		'bs_time',
		'bs_day',
		'created_at',
		'updated_at',
		'deleted_at',
		'sub_id',
	),
)); ?>
