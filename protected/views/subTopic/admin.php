<?php
/* @var $this SubTopicController */
/* @var $model SubTopic */

$this->breadcrumbs=array(
	'Sub Topics'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SubTopic', 'url'=>array('index')),
	array('label'=>'Create SubTopic', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sub-topic-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sub Topics</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sub-topic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'class_id',
		'sub_id',
		'sub_section_id',
		'topic_name',
		'duration_hours',
		/*
		'prof_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
