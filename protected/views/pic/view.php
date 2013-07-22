<?php
/* @var $this PicController */
/* @var $model Pic */

$this->breadcrumbs=array(
	'Pics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pic', 'url'=>array('index')),
	array('label'=>'Create Pic', 'url'=>array('create')),
	array('label'=>'Update Pic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pic', 'url'=>array('admin')),
);
?>

<h1>View Pic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photo_file_name',
		'photo_content_type',
		'photo_data',
		'photo_file_size',
	),
)); ?>


     <?php
	 if($model->photo_file_name){ 
    echo '<img class="imgbrder" src="'.$this->createUrl('DisplaySavedImage&id='.$model->primaryKey).'" alt="'.$model->photo_file_name.'" width="101" height="107" />';
	 }else{
		echo '<img class="imgbrder" src="images/super_avatar.png" alt='.$model->first_name.' width="101" height="107" />'; 
	 }
	 ?>