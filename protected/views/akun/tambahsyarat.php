

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hasil-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Unggah Syarat</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Berdasarkan Permendagri Nomor 64 Tahun 2011 Pengajuan permohonan Izin Penelitian/Survei diterbitkan dengan persyaratan :</legend>
							<h2>Mohon diisi sesuai dengan identitas pemohon</h2>
							<legend></legend>

	
	<div class="control-group">
		<?php echo $form->labelEx($model,'SYARAT1'); ?>
		<?php echo $form->fileField($model,'SYARAT1',array('size'=>60,'maxlength'=>1024)); ?>
		<span class="help-inline">format ( .jpg) maksimal ukuran file 2Mb. </span>
		<?php echo $form->error($model,'SYARAT1'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'SYARAT2'); ?>
		<?php echo $form->fileField($model,'SYARAT2',array('size'=>60,'maxlength'=>1024)); ?>
		<span class="help-inline">format ( .jpg) maksimal ukuran file 2Mb. </span>
		<?php echo $form->error($model,'SYARAT2'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'SYARAT3'); ?>
		<?php echo $form->fileField($model,'SYARAT3',array('size'=>60,'maxlength'=>1024)); ?>
		<span class="help-inline">format ( .jpg) maksimal ukuran file 2Mb. </span>
		<?php echo $form->error($model,'SYARAT3'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'SYARAT4'); ?>
		<?php echo $form->fileField($model,'SYARAT4',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT4'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'SYARAT5'); ?>
		<?php echo $form->fileField($model,'SYARAT5',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'SYARAT5'); ?>
	</div>

	<?php echo CHtml::submitButton("Unggah Sekarang", array('class' => 'btn btn-primary')); ?>

                        <button class="btn">Batal</button>
                        </div>

                        <?php $this -> endWidget(); ?>
                        
                        </div>

	

							</fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>

	<!-- form -->