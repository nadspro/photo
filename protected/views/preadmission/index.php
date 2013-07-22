

<?php
/* @var $this PreadmissionController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Create Preadmission', 'url'=>array('create')),
	array('label'=>'Manage Preadmission', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>



