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
        <?php echo $form->labelEx($model,'SYARAT1'); ?>
        <?php echo $form->fileField($model,'SYARAT1',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'SYARAT1'); ?>
        </div>

        <div class="row">
        <?php echo $form->labelEx($model,'SYARAT2'); ?>
        <?php echo $form->fileField($model,'SYARAT2',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'SYARAT2'); ?>
        </div>
        
        <div class="row">
        <?php echo $form->labelEx($model,'SYARAT3'); ?>
        <?php echo $form->fileField($model,'SYARAT3',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'SYARAT3'); ?>
        </div>
        
        <div class="row">
        <?php echo $form->labelEx($model,'SYARAT4'); ?>
        <?php echo $form->fileField($model,'SYARAT4',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'SYARAT4'); ?>
        </div>

        <div class="row">
        <?php echo $form->labelEx($model,'SYARAT5'); ?>
        <?php echo $form->fileField($model,'SYARAT5',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'SYARAT5'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this -> endWidget(); ?>
    </div>
</div>