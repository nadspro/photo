<?php
/* @var $this SubSubTopicController */
/* @var $model SubSubTopic */

$this->breadcrumbs=array(
	'Sub Sub Topics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubSubTopic', 'url'=>array('index')),
	array('label'=>'Create SubSubTopic', 'url'=>array('create')),
	array('label'=>'View SubSubTopic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubSubTopic', 'url'=>array('admin')),
);
?>

<h1>Update SubSubTopic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>