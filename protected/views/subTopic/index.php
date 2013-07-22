<?php
/* @var $this SubTopicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Topics',
);

$this->menu=array(
	array('label'=>'Create SubTopic', 'url'=>array('create')),
	array('label'=>'Manage SubTopic', 'url'=>array('admin')),
);
?>

<h1>Sub Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
