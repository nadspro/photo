<?php
/* @var $this StudentAttendanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Student Attendances',
);

$this->menu=array(
	array('label'=>'Create StudentAttendance', 'url'=>array('create')),
	array('label'=>'Manage StudentAttendance', 'url'=>array('admin')),
);
?>

<h1>Student Attendances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
