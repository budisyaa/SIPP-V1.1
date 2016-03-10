            <?php $form = $this -> beginWidget('CActiveForm', 
            array('id' => 'peserta-form', 
            'enableAjaxValidation' => false,
            'htmlOptions'=>array('enctype'=>'multipart/form-data'),
            )); ?>
            <?php echo $form->errorSummary($model); ?>
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-th"></i>Formulir Daftar Penelitian dan Pengembangan</h2>
                        <div class="box-icon">
                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                    <div class="row-fluid">
                        <div class="span4"><h6>Data Pribadi</h6>
                <div class="control-group">
                    <?php echo $form->labelEx($model,'NAMA'); ?>
                    <?php echo $form->textField($model,'NAMA',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'NAMA'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'NO_ID'); ?>
                    <?php echo $form->textField($model,'NO_ID',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'NO_ID'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'TEMPAT_LAHIR'); ?>
                    <?php echo $form->textField($model,'TEMPAT_LAHIR',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'TEMPAT_LAHIR'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'TANGGAL_LAHIR'); ?>
                    <?php echo $form->dateField($model,'TANGGAL_LAHIR'); ?>
                    <?php echo $form->error($model,'TANGGAL_LAHIR'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'JENIS_KELAMIN'); ?>
                    <?php echo $form->dropDownList($model,'JENIS_KELAMIN',
                        array('1'=>'Laki-Laki','2'=>'Perempuan'),
                        array('empty'=>'--JENIS_KELAMIN--')); ?>
                    
                    <?php echo $form->error($model,'JENIS_KELAMIN'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'PEKERJAAN'); ?>
                    <?php echo $form->textField($model,'PEKERJAAN',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'PEKERJAAN'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'ASAL_INS'); ?>
                    <?php echo $form->textField($model,'ASAL_INS',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'ASAL_INS'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'BIDANG'); ?>
                    <?php echo $form->textField($model,'BIDANG',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'BIDANG'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'NO_HP'); ?>
                    <?php echo $form->textField($model,'NO_HP',array('size'=>13,'maxlength'=>13)); ?>
                    <?php echo $form->error($model,'NO_HP'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'ALAMAT'); ?>
                    <?php echo $form->textArea($model,'ALAMAT',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'ALAMAT'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'FOTO_PESERTA'); ?>
                    <?php echo $form->fileField($model,'FOTO_PESERTA',array('size'=>60,'maxlength'=>1024)); ?>
                    <span class="help-inline">maksimal ukuran file 2Mb. </span>
                    <?php echo $form->error($model,'FOTO_PESERTA'); ?>
                </div>
                        </div>

                        <div class="span4"><h6>Data Penelitian</h6>
                <div class="control-group">
                    <?php echo $form->labelEx($model,'JUDUL'); ?>
                    <?php echo $form->textField($model,'JUDUL',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'JUDUL'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'LOKASI_PT'); ?>
                    <?php echo $form->textField($model,'LOKASI_PT',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'LOKASI_PT'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'PENANGGUNG_JAWAB'); ?>
                    <?php echo $form->textField($model,'PENANGGUNG_JAWAB',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'PENANGGUNG_JAWAB'); ?>
                </div>
                        </div>
                        <div class="span4"><h6>Data Akun</h6>
                <div class="control-group">
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1024, 'setOnEmpty' => true, 'value' => '')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model,'EMAIL'); ?>
                    <?php echo $form->emailField($model,'EMAIL',array('size'=>60,'maxlength'=>1024)); ?>
                    <?php echo $form->error($model,'EMAIL'); ?>
                </div>
                 
                        <?php echo CHtml::submitButton("Daftar", array('class' => 'btn btn-primary'),array('confirm'=> 'Are you Sure')); ?>

                        <button class="btn">Batal</button>
                        </div>

                        <?php $this -> endWidget(); ?>
                        
                        </div>
                        </div>
                    </div>                   
                  </div>
                </div><!--/span-->
            </div><!--/row-->

         