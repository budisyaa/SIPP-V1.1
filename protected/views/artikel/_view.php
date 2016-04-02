<?php
/* @var $this ArtikelController */
/* @var $data Artikel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ARTIKEL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ARTIKEL), array('view', 'id'=>$data->ID_ARTIKEL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUDUL_ART')); ?>:</b>
	<?php echo CHtml::encode($data->JUDUL_ART); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISI_ART')); ?>:</b>
	<?php echo CHtml::encode($data->ISI_ART); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SINOPSIS')); ?>:</b>
	<?php echo CHtml::encode($data->SINOPSIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOTO_ART')); ?>:</b>
	<?php echo CHtml::encode($data->FOTO_ART); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_POST')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_POST); ?>
	<br />


</div>