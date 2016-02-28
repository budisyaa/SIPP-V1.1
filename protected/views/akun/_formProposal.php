<div style="padding-right: 10px ;margin-left:5px;margin-bottom:15px;border:1px solid #CCC; margin-right: 5px; margin-top: 5px; text-align: justify; padding-top: 15px;">
    <div class="form" style="margin-left: 15px;">
 
        <?php $form = $this -> beginWidget('CActiveForm', 
        array('id' => 'hasil-form', 
        	'enableAjaxValidation' => false,
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),

		)); ?>

        
        <?php echo $form -> errorSummary($model); ?>


        <div class="row">
        <?php echo $form->labelEx($model,'NAMA_PROPOSAL'); ?>
        <?php echo $form->fileField($model,'NAMA_PROPOSAL',array('size'=>100,'maxlength'=>1024)); ?>
        <?php echo $form->error($model,'NAMA_PROPOSAL'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this -> endWidget(); ?>
    </div>
</div>