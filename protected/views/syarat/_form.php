<?php
/* @var $this SyaratController */
/* @var $model Syarat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'syarat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_PESERTA'); ?>
		<?php echo $form->textField($model,'ID_PESERTA'); ?>
		<?php echo $form->error($model,'ID_PESERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SYARAT1'); ?>
		<?php echo $form->fileField($model,'SYARAT1',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SYARAT2'); ?>
		<?php echo $form->fileField($model,'SYARAT2',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SYARAT3'); ?>
		<?php echo $form->fileField($model,'SYARAT3',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SYARAT4'); ?>
		<?php echo $form->fileField($model,'SYARAT4',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SYARAT5'); ?>
		<?php echo $form->fileField($model,'SYARAT5',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->