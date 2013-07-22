<?php
/* @var $this StudentAttendanceController */
/* @var $model StudentAttendance */

$this->breadcrumbs=array(
	'Student Attendances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentAttendance', 'url'=>array('index')),
	array('label'=>'Manage StudentAttendance', 'url'=>array('admin')),
);
?>

<h1>Create StudentAttendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>