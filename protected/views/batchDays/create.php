<?php
/* @var $this BatchDaysController */
/* @var $model BatchDays */

$this->breadcrumbs=array(
	'Batch Days'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BatchDays', 'url'=>array('index')),
	array('label'=>'Manage BatchDays', 'url'=>array('admin')),
);
?>

<h1>Create BatchDays</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>