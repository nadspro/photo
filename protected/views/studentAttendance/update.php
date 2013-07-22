<?php
/* @var $this StudentAttendanceController */
/* @var $model StudentAttendance */

$this->breadcrumbs=array(
	'Student Attendances'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentAttendance', 'url'=>array('index')),
	array('label'=>'Create StudentAttendance', 'url'=>array('create')),
	array('label'=>'View StudentAttendance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StudentAttendance', 'url'=>array('admin')),
);
?>

<h1>Update StudentAttendance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>