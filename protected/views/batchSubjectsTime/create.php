<?php
/* @var $this BatchSubjectsTimeController */
/* @var $model BatchSubjectsTime */

$this->breadcrumbs=array(
	'Batch Subjects Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BatchSubjectsTime', 'url'=>array('index')),
	array('label'=>'Manage BatchSubjectsTime', 'url'=>array('admin')),
);
?>

<h1>Create BatchSubjectsTime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>