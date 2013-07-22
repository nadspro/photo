<?php
/* @var $this SubSectionController */
/* @var $model SubSection */

$this->breadcrumbs=array(
	'Sub Sections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubSection', 'url'=>array('index')),
	array('label'=>'Create SubSection', 'url'=>array('create')),
	array('label'=>'View SubSection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubSection', 'url'=>array('admin')),
);
?>

<h1>Update SubSection <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>