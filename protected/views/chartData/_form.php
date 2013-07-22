<?php
/* @var $this ChartDataController */
/* @var $model ChartData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chart-data-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php
$this->widget('application.extensions.amcharts.EAmChartWidget', 
                    array(
                        'width' => 700, // width of the Chart
                        'height' => 400, // height of the chart
                        'chart'=>array(// collections of grpah to display into the chart
                                    'dataProvider'=>$dataProvider, // DataProvider
                                    'categoryField' => 'Date' // Field of the DataProvider to set on the X Axis
                                    ),
                        'graphs'=>array(
                                array(
                                    'valueField' => 'GoldMedals', // Field of the DataProvider to set the Y Axis
                                    'title'=>'Value', // Title of the , used on the Legend
                                    'type' => 'bar' // Type of Graph
                                ),
                                array(
                                    'valueField' => 'SilverMedals',
                                    'title'=>'Value',
                                    'type' => 'line',
                                    'fillColors'=>'Transparent',
                                    'fillAlphas'=>'0',
                                    'lineColor'=>'#EE2299',
                                    'bullet'=>'round'
                                )),
                        'categoryAxis'=>array(
                                    'title'=>'Species Name'
                                    ),
                        'valueAxis'=>array(
                                    'title'=>'Identifier')
    )); 
 
    // Chart with pie   
    $this->widget('application.extensions.amcharts.AmChartWidget',
            array(
                    'width' => 700,
                    'height' => 400,
                    'Chart'=>array(
                            'dataProvider'=>$arrayData,
                            'titleField' => 'Country',
                            'valueField' => 'Medals',
                            'type' => 'pie'
                    )
            )); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->