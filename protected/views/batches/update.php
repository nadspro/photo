<?php
/* @var $this BatchesController */
/* @var $model Batches */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	$model->batch_id=>array('view','id'=>$model->batch_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index')),
	array('label'=>'Create Batches', 'url'=>array('create')),
	array('label'=>'View Batches', 'url'=>array('view', 'id'=>$model->batch_id)),
	array('label'=>'Manage Batches', 'url'=>array('admin')),
);
?>

<h1>Update Batches <?php echo $model->batch_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>