<?php
/* @var $this ChartDataController */
/* @var $model ChartData */

$this->breadcrumbs=array(
	'Chart Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ChartData', 'url'=>array('index')),
	array('label'=>'Manage ChartData', 'url'=>array('admin')),
);
?>

<h1>Create ChartData</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>