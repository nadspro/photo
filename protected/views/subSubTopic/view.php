<?php
/* @var $this SubSubTopicController */
/* @var $model SubSubTopic */

$this->breadcrumbs=array(
	'Sub Sub Topics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubSubTopic', 'url'=>array('index')),
	array('label'=>'Create SubSubTopic', 'url'=>array('create')),
	array('label'=>'Update SubSubTopic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubSubTopic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubSubTopic', 'url'=>array('admin')),
);
?>

<h1>View SubSubTopic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sub_topic_id',
		'sub_topic_name',
	),
)); ?>
