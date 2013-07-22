<?php
/* @var $this BatchDaysController */
/* @var $model BatchDays */

$this->breadcrumbs=array(
	'Batch Days'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BatchDays', 'url'=>array('index')),
	array('label'=>'Create BatchDays', 'url'=>array('create')),
	array('label'=>'View BatchDays', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BatchDays', 'url'=>array('admin')),
);
?>

<h1>Update BatchDays <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>