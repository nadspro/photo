<tr>
<td><div class="row">
<?php echo CHtml::activeLabel($model, "[$index]class_id")?>
<?php echo CHtml::activeDropDownList($model,"[$index]class_id",CHtml::listData( Classes::model()->findAll(),'id','class_name'), array('prompt'=>'Select Class'));?>
</div></td>

<td><div class="row">
<?php echo CHtml::activeLabel($model, "[$index]board")?>
<?php echo CHtml::activeDropDownList($model,"[$index]board",CHtml::listData( Board::model()->findAll(),'id','board_name'), array('prompt'=>'Select Board'));?>
</div></td>

<td><div class="row">
<?php echo CHtml::activeLabel($model, "[$index]name")?>
<?php echo CHtml::activeTextField($model, "[$index]name",array('size'=>60,'maxlength'=>255,'prompt'=>'Enter Subject name'));?>
</div></td>
</tr>

