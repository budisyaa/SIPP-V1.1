<?php
/* @var $this PesertaController */
/* @var $model Peserta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peserta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
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
		<?php echo $form->labelEx($model,'NO_ID'); ?>
		<?php echo $form->textField($model,'NO_ID',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'NO_ID'); ?>
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
		<?php echo $form->labelEx($model,'BIDANG'); ?>
		<?php echo $form->textField($model,'BIDANG',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'BIDANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PEKERJAAN'); ?>
		<?php echo $form->textField($model,'PEKERJAAN',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'PEKERJAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOKASI_PT'); ?>
		<?php echo $form->textField($model,'LOKASI_PT',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'LOKASI_PT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PENANGGUNG_JAWAB'); ?>
		<?php echo $form->textField($model,'PENANGGUNG_JAWAB',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'PENANGGUNG_JAWAB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENIS_KELAMIN'); ?>
		<?php echo $form->dropDownList($model,'JENIS_KELAMIN',
			array('1'=>'Laki-Laki','2'=>'Perempuan'),
			array('empty'=>'--JENIS_KELAMIN--')); ?>
		
		<?php echo $form->error($model,'JENIS_KELAMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOTO_PESERTA'); ?>
		<?php echo $form->fileField($model,'FOTO_PESERTA',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'FOTO_PESERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'NO_HP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->emailField($model,'EMAIL',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->dropDownList($model,'STATUS',
			array('0'=>'pending','1'=>'diterima','2'=>'ditolak'),
			array('empty'=>'--status--')); ?>
		
		<?php echo $form->error($model,'STATUS'); ?>
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

	
	<div class="row">
		<?php echo $form->labelEx($model,'TEMPAT_LAHIR'); ?>
		<?php echo $form->textField($model,'TEMPAT_LAHIR',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'TEMPAT_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->dateField($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->error($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_peserta'); ?>
		<?php echo $form->dropDownList($model,'status_peserta',
			array('0'=>'aktif','1'=>'tidak aktif'),
			array('empty'=>'--status--')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->