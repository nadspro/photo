<?php
/* @var $this SubSubTopicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Sub Topics',
);

$this->menu=array(
	array('label'=>'Create SubSubTopic', 'url'=>array('create')),
	array('label'=>'Manage SubSubTopic', 'url'=>array('admin')),
);
?>

<h1>Sub Sub Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
