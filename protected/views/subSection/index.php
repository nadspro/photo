<?php
/* @var $this SubSectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Sections',
);

$this->menu=array(
	array('label'=>'Create SubSection', 'url'=>array('create')),
	array('label'=>'Manage SubSection', 'url'=>array('admin')),
);
?>

<h1>Sub Sections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
