<?php
/* @var $this SubjectsController */
/* @var $model Subjects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subjects-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <table>
    <div class="row"><tr>
		<td><?php echo $form->labelEx($model,'class'); ?></td>
		<td><?php echo CHtml::activeDropDownList($model,'class',CHtml::listData( Subjects::model()->getClassOptions(), 'class_name' ,'class_name'), array('prompt'=>'Select Class'));?></td>
		<td><?php echo $form->error($model,'class'); ?></td>
	</div></tr>
    
    <div class="row"><tr>
		<td><?php echo $form->labelEx($model,'board'); ?></td>
		<td><?php echo $form->textField($model,'board',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'board'); ?></td>
	</div></tr>

	<div class="row"><tr>
		<td><?php echo $form->labelEx($model,'name'); ?></td>
		<td><?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'name'); ?></td>
	</div></tr>
    

	<ul class="subsection">
<?php $models = array(); for($i=0; $i<count($models); $i++):?>
<?php $this->renderPartial('_subsection', array(
'model1' => $models[$i],
'index' => $i,
))?>
<?php endfor ?>
</ul>
<div class="row buttons">
<?php echo CHtml::button('Add Subject Section',array('class' => 'subsection-add'))?>
<?php Yii::app()->clientScript->registerCoreScript("jquery")?>
<script>
$(".subsection-add").click(function(){
$.ajax({
success: function(html){
$(".subsection").append(html);
},
type: 'get',
url: '<?php echo $this->createUrl('field')?>',
data: {
index: $(".subsection li").size()
},
cache: false,
dataType: 'html'
});
});
</script>
</div>
	



	<div class="row buttons"><tr>
    	<td></td>
		<td><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
        <td></td>
	</div></tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->