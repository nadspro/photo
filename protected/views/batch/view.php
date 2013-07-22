<?php
/* @var $this BatchController */
/* @var $model Batch */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Batch', 'url'=>array('index')),
	array('label'=>'Create Batch', 'url'=>array('create')),
	array('label'=>'Update Batch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Batch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Batch', 'url'=>array('admin')),
);
?>

<h1>View Batch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'class_id',
		'batch_name',
		'sub_batch',
		'no_of_students',
		'board',
		'school',
		'startdate',
		'timings',
		'enddate',
		'is_active',
		'created_at',
		'updated_at',
		'deleted_at',
	),
)); ?>
