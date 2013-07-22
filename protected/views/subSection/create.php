<?php
/* @var $this SubSectionController */
/* @var $model SubSection */

$this->breadcrumbs=array(
	'Sub Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubSection', 'url'=>array('index')),
	array('label'=>'Manage SubSection', 'url'=>array('admin')),
);
?>

<h1>Create SubSection</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>