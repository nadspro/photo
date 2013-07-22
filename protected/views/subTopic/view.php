<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */

$this->breadcrumbs=array(
	'Sub Topics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubTopic', 'url'=>array('index')),
	array('label'=>'Create SubTopic', 'url'=>array('create')),
	array('label'=>'Update SubTopic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubTopic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubTopic', 'url'=>array('admin')),
);
?>

<h1>View SubTopic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'class_id',
		'sub_id',
		'sub_section_id',
		'topic_name',
		'duration_hours',
		'prof_id',
	),
)); ?>
