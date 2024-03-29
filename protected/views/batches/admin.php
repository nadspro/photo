<?php
/* @var $this BatchesController */
/* @var $model Batches */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Batches', 'url'=>array('index')),
	array('label'=>'Create Batches', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#batches-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Batches</h1>

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
	'id'=>'batches-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'batch_id',
		'batch_name',
		'sub_batch_name',
		'no_of_students',
		'class',
		'board',
		/*
		'school',
		'startdate',
		'enddate',
		'is_active',
		'created_at',
		'updated_at',
		'deleted_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
