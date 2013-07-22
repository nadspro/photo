<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */

$this->breadcrumbs=array(
	'Sub Topics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubTopic', 'url'=>array('index')),
	array('label'=>'Create SubTopic', 'url'=>array('create')),
	array('label'=>'View SubTopic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubTopic', 'url'=>array('admin')),
);
?>

<h1>Update SubTopic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>