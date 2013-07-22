<?php
/* @var $this BatchDaysController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Batch Days',
);

$this->menu=array(
	array('label'=>'Create BatchDays', 'url'=>array('create')),
	array('label'=>'Manage BatchDays', 'url'=>array('admin')),
);
?>

<h1>Batch Days</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
