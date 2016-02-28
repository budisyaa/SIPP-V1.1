<div style="padding-right: 10px ;margin-left:5px;margin-bottom:15px;border:1px solid #CCC; margin-right: 5px; margin-top: 5px; text-align: justify; padding-top: 15px;">
    <div class="form" style="margin-left: 15px;">
 
        <?php $form = $this -> beginWidget('CActiveForm', 
        array('id' => 'hasil-form', 
        	'enableAjaxValidation' => false,
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),

		)); ?>

        
        <?php echo $form -> errorSummary($model); ?>

        <div class="row">
        <?php echo $form->labelEx($model,'ID_PESERTA'); ?>
        <?php echo $form->textField($model,'ID_PESERTA'); ?>
        <?php echo $form->error($model,'ID_PESERTA'); ?>
        </div>

        <div class="row">
        <?php echo $form->labelEx($model,'NAMA_HASIL'); ?>
        <?php echo $form->fileField($model,'NAMA_HASIL',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'NAMA_HASIL'); ?>
        </div>

        <div class="row">
        <?php echo $form->labelEx($model,'NAMA_HASIL2'); ?>
        <?php echo $form->fileField($model,'NAMA_HASIL2',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'NAMA_HASIL2'); ?>
        </div>

        

        <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this -> endWidget(); ?>
    </div>
</div>