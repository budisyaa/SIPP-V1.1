<img src="<?php echo Yii::app()->request->baseUrl . '/upload/artikel/' . $model->FOTO_ART; ?>" alt=""/>
					<h2> <?php echo CHtml::encode($model->JUDUL_ART);?> </h2> dipost pada: <?php echo CHtml::encode($model->TANGGAL_POST);?>
					<p><?php echo CHtml::encode($model->ISI_ART);?></p>