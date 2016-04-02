    <?php $form = $this -> beginWidget('CActiveForm', 
        array('id' => 'updateadmin-form', 
        	'enableAjaxValidation' => false,
        	'enableClientValidation'=>TRUE, 
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)); ?>

        <?php echo $form -> errorSummary($model); ?>

        <div class="row-fluid sortable">
        <h1><i class="icon-th"></i>Ubah Profil <?php echo $model->nama_opr; ?> (Operator)</h1>
                
                    <div class="box-content">
                    <div class="row-fluid">
                <div class="span4"><h6>Data Pribadi</h6>
                <div class="control-group">
                    <?php echo $form->labelEx($model,'nama_opr'); ?>
                    <?php echo CHtml::textField("nama_opr",$model->nama_opr,array('readonly'=>true)); ?>
                    <!-- <?php echo $form->textField($model,'NAMA_ADMIN',array('size'=>60,'maxlength'=>1024)); ?> -->
                    <?php echo $form->error($model,'nama_opr'); ?>
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
                    <?php echo $form->labelEx($model,'foto_opr'); ?>
                    <?php echo $form->fileField($model,'foto_opr',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'foto_opr'); ?>
                </div>

                
                        <?php echo CHtml::submitButton("Daftar", array('class' => 'btn btn-primary')); ?>

                        <button class="btn">Batal</button>
                        </div>

                        <?php $this -> endWidget(); ?>
                        
                        </div>
                        </div>
                    </div>                   
                  
        
           