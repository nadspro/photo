<?php
/* @var $this BatchDaysController */
/* @var $model BatchDays */

$this->breadcrumbs=array(
	'Batch Days'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BatchDays', 'url'=>array('index')),
	array('label'=>'Create BatchDays', 'url'=>array('create')),
	array('label'=>'Update BatchDays', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BatchDays', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BatchDays', 'url'=>array('admin')),
);
?>

<h1>View BatchDays #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'batch_id',
		'monday',
		'tuesday',
		'wednesday',
		'thursday',
		'friday',
		'saturday',
		'sunday',
	),
)); ?>
