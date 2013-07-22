<?php
/* @var $this StudentAttendanceController */
/* @var $model StudentAttendance */

$this->breadcrumbs=array(
	'Student Attendances'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StudentAttendance', 'url'=>array('index')),
	array('label'=>'Create StudentAttendance', 'url'=>array('create')),
	array('label'=>'Update StudentAttendance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StudentAttendance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentAttendance', 'url'=>array('admin')),
);
?>

<h1>View StudentAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		's_id',
		'name',
		'present',
		'absent_inform',
		'date',
	),
)); ?>
