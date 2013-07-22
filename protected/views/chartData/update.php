<?php
/* @var $this ChartDataController */
/* @var $model ChartData */

$this->breadcrumbs=array(
	'Chart Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ChartData', 'url'=>array('index')),
	array('label'=>'Create ChartData', 'url'=>array('create')),
	array('label'=>'View ChartData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ChartData', 'url'=>array('admin')),
);
?>

<h1>Update ChartData <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>