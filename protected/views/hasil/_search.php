<?php
/* @var $this HasilController */
/* @var $model Hasil */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_HASIL'); ?>
		<?php echo $form->textField($model,'ID_HASIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PESERTA'); ?>
		<?php echo $form->textField($model,'ID_PESERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_HASIL'); ?>
		<?php echo $form->textField($model,'NAMA_HASIL',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_HASIL2'); ?>
		<?php echo $form->textField($model,'NAMA_HASIL2',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->