<?php
/* @var $this PesertaController */
/* @var $model Peserta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'updatestatushasil-form',
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
		<?php echo $form->labelEx($model,'code_reg'); ?>
		<?php echo $form->textField($model,'code_reg',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'code_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'NAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUDUL'); ?>
		<?php echo $form->textField($model,'JUDUL',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'JUDUL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ASAL_INS'); ?>
		<?php echo $form->textField($model,'ASAL_INS',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ASAL_INS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_HASIL'); ?>
		<?php echo $form->dropDownList($model,'STATUS_HASIL',
			array('0'=>'pending','1'=>'diterima','2'=>'ditolak'),
			array('empty'=>'--status--')); ?>
		
		<?php echo $form->error($model,'STATUS_HASIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MASA_BERLAKU_AWAL'); ?>
		<?php echo $form->dateField($model,'MASA_BERLAKU_AWAL'); ?>
		<?php echo $form->error($model,'MASA_BERLAKU_AWAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MASA_BERLAKU_AKHIR'); ?>
		<?php echo $form->dateField($model,'MASA_BERLAKU_AKHIR'); ?>
		<?php echo $form->error($model,'MASA_BERLAKU_AKHIR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->