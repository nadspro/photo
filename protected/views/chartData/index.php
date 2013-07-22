<?php
/* @var $this ChartDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chart Datas',
);

$this->menu=array(
	array('label'=>'Create ChartData', 'url'=>array('create')),
	array('label'=>'Manage ChartData', 'url'=>array('admin')),
);
?>

<h1>Chart Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
