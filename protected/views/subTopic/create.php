<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */

$this->breadcrumbs=array(
	'Sub Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubTopic', 'url'=>array('index')),
	array('label'=>'Manage SubTopic', 'url'=>array('admin')),
);
?>

<h1>Create SubTopic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>