<?php
/* @var $this ChartDataController */
/* @var $model ChartData */

$this->breadcrumbs=array(
	'Chart Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ChartData', 'url'=>array('index')),
	array('label'=>'Create ChartData', 'url'=>array('create')),
	array('label'=>'Update ChartData', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ChartData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ChartData', 'url'=>array('admin')),
);
?>

<h1>View ChartData #<?php echo $model->id; ?></h1>

<!--<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'time',
		'data',
	),
)); ?> -->

<?php
 $this->Widget('ext.ActiveHighstock.HighstockWidget', array(
        'dataProvider'=>$dataProvider,
        'options'=> array(
            'theme' => 'grid', //dark-blue dark-green gray grid skies
        'rangeSelector'=>array('selected'=>1),
            'credits' => array('enabled' => true),
        'title'=>array('text'=>'Table title'),
            'xAxis'=>array('maxZoom'=>'4 * 3600000' ),  //4 hours
            'yAxis'=>array('title'=>array('text'=>'DataValueTitle')),
            'series'=>array(
                array(
                    'name'=>'SeriesTitle', //title of data
                    'dataResource'=>'data',     //data resource according to MySQL column 'data'
                    'dateResource'=>'time',     //data resource according to MySQL column 'time'
                )
            )
        )
    ));
 
?>
