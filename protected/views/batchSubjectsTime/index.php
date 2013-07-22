<?php
/* @var $this BatchSubjectsTimeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Batch Subjects Times',
);

$this->menu=array(
	array('label'=>'Create BatchSubjectsTime', 'url'=>array('create')),
	array('label'=>'Manage BatchSubjectsTime', 'url'=>array('admin')),
);
?>

<h1>Batch Subjects Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
