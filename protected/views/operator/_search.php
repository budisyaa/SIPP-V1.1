<?php
/* @var $this OperatorController */
/* @var $model Operator */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_opr'); ?>
		<?php echo $form->textField($model,'id_opr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_opr'); ?>
		<?php echo $form->textField($model,'nama_opr',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_opr'); ?>
		<?php echo $form->textField($model,'foto_opr',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->