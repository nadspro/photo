<?php
/* @var $this SubSectionController */
/* @var $model SubSection */

$this->breadcrumbs=array(
	'Sub Sections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubSection', 'url'=>array('index')),
	array('label'=>'Create SubSection', 'url'=>array('create')),
	array('label'=>'Update SubSection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubSection', 'url'=>array('admin')),
);
?>

<h1>View SubSection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sub_id',
		'section_name',
	),
)); ?>
