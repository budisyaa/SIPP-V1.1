<?php
/* @var $this SyaratController */
/* @var $model Syarat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_SYARAT'); ?>
		<?php echo $form->textField($model,'ID_SYARAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PESERTA'); ?>
		<?php echo $form->textField($model,'ID_PESERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SYARAT1'); ?>
		<?php echo $form->textField($model,'SYARAT1',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SYARAT2'); ?>
		<?php echo $form->textField($model,'SYARAT2',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SYARAT3'); ?>
		<?php echo $form->textField($model,'SYARAT3',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SYARAT4'); ?>
		<?php echo $form->textField($model,'SYARAT4',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SYARAT5'); ?>
		<?php echo $form->textField($model,'SYARAT5',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->