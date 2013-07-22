<?php
/* @var $this BatchSubjectsTimeController */
/* @var $model BatchSubjectsTime */

$this->breadcrumbs=array(
	'Batch Subjects Times'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BatchSubjectsTime', 'url'=>array('index')),
	array('label'=>'Create BatchSubjectsTime', 'url'=>array('create')),
	array('label'=>'View BatchSubjectsTime', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BatchSubjectsTime', 'url'=>array('admin')),
);
?>

<h1>Update BatchSubjectsTime <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>