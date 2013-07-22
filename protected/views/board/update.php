<?php
/* @var $this BoardController */
/* @var $model Board */

$this->breadcrumbs=array(
	'Boards'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Board', 'url'=>array('index')),
	array('label'=>'Create Board', 'url'=>array('create')),
	array('label'=>'View Board', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Board', 'url'=>array('admin')),
);
?>

<h1>Update Board <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>