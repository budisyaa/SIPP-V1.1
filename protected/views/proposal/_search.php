<?php
/* @var $this ProposalController */
/* @var $model Proposal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PROPOSAL'); ?>
		<?php echo $form->textField($model,'ID_PROPOSAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PESERTA'); ?>
		<?php echo $form->textField($model,'ID_PESERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_PROPOSAL'); ?>
		<?php echo $form->textField($model,'NAMA_PROPOSAL',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->