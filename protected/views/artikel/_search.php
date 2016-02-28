<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_ARTIKEL'); ?>
		<?php echo $form->textField($model,'ID_ARTIKEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUDUL_ART'); ?>
		<?php echo $form->textField($model,'JUDUL_ART',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISI_ART'); ?>
		<?php echo $form->textField($model,'ISI_ART',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOTO_ART'); ?>
		<?php echo $form->textField($model,'FOTO_ART',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_POST'); ?>
		<?php echo $form->textField($model,'TANGGAL_POST'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->