

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hasil-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Datepicker, Autocomplete, WYSIWYG</legend>

	
	<div class="control-group">
		<?php echo $form->labelEx($model,'NAMA_HASIL'); ?>
		<?php echo $form->fileField($model,'NAMA_HASIL',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'NAMA_HASIL'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'NAMA_HASIL2'); ?>
		<?php echo $form->fileField($model,'NAMA_HASIL2',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'NAMA_HASIL2'); ?>
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