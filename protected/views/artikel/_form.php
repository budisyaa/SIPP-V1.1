<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
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
		<?php echo $form->labelEx($model,'JUDUL_ART'); ?>
		<?php echo $form->textField($model,'JUDUL_ART',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'JUDUL_ART'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISI_ART'); ?>
		<?php echo $form->textField($model,'ISI_ART',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ISI_ART'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOTO_ART'); ?>
		<?php echo $form->fileField($model,'FOTO_ART',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'FOTO_ART'); ?>
	</div>

	<div class="row">
                    <?php echo $form->labelEx($model,'STATUS'); ?>
                    <?php echo $form->dropDownList($model,'STATUS',
                        array('1'=>'Tampil Beranda','2'=>'Tidak Tampil Beranda'),
                        array('empty'=>'--STATUS--')); ?>
                    
                    <?php echo $form->error($model,'STATUS'); ?>
                </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->