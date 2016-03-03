    <?php $form = $this -> beginWidget('CActiveForm', 
        array('id' => 'updateadmin-form', 
        	'enableAjaxValidation' => false,
        	'enableClientValidation'=>TRUE, 
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)); ?>

        <?php echo $form -> errorSummary($model); ?>

        <div class="row-fluid sortable">
        <h1><i class="icon-th"></i>Ubah Profil <?php echo $model->NAMA_ADMIN; ?> (Admin)</h1>
                
                    <div class="box-content">
                    <div class="row-fluid">
                <div class="span4"><h6>Data Pribadi</h6>
                <div class="control-group">
                    <?php echo $form->labelEx($model,'NAMA_ADMIN'); ?>
                    <?php echo CHtml::textField("NAMA_ADMIN",$model->NAMA_ADMIN,array('readonly'=>true)); ?>
                    <!-- <?php echo $form->textField($model,'NAMA_ADMIN',array('size'=>60,'maxlength'=>1024)); ?> -->
                    <?php echo $form->error($model,'NAMA_ADMIN'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo CHtml::textField("username",$model->username,array('readonly'=>true)); ?>
                    <!-- <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>1024)); ?> -->
                    <?php echo $form->error($model,'username'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1024, 'setOnEmpty' => true, 'value' => '')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'FOTO_ADMIN'); ?>
                    <?php echo $form->fileField($model,'FOTO_ADMIN',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'FOTO_ADMIN'); ?>
                </div>

                
                        <?php echo CHtml::submitButton("Daftar", array('class' => 'btn btn-primary')); ?>

                        <button class="btn">Batal</button>
                        </div>

                        <?php $this -> endWidget(); ?>
                        
                        </div>
                        </div>
                    </div>                   
                  
        
           