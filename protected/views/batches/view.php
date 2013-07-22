<?php
/* @var $this BatchesController */
/* @var $model Batches */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	$model->batch_id,
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index')),
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'Update Batches', 'url'=>array('update', 'id'=>$model->batch_id)),
	array('label'=>'Delete Batches', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->batch_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
);
?>

<h1>View Batches #<?php echo $model->batch_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'batch_id',
		'batch_name',
		'sub_batch_name',
		'no_of_students',
		'class',
		'board',
		'school',
		'startdate',
		'enddate',
		'is_active',
		'created_at',
		'updated_at',
		'deleted_at',
	),
)); ?>
