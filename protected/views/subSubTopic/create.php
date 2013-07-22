<?php
/* @var $this SubSubTopicController */
/* @var $model SubSubTopic */

$this->breadcrumbs=array(
	'Sub Sub Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubSubTopic', 'url'=>array('index')),
	array('label'=>'Manage SubSubTopic', 'url'=>array('admin')),
);
?>

<h1>Create SubSubTopic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>