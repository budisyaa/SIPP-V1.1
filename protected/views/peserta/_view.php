<?php
/* @var $this PesertaController */
/* @var $data Peserta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PESERTA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PESERTA), array('view', 'id'=>$data->ID_PESERTA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->NO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUDUL')); ?>:</b>
	<?php echo CHtml::encode($data->JUDUL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASAL_INS')); ?>:</b>
	<?php echo CHtml::encode($data->ASAL_INS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIDANG')); ?>:</b>
	<?php echo CHtml::encode($data->BIDANG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PEKERJAAN')); ?>:</b>
	<?php echo CHtml::encode($data->PEKERJAAN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOKASI_PT')); ?>:</b>
	<?php echo CHtml::encode($data->LOKASI_PT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENANGGUNG_JAWAB')); ?>:</b>
	<?php echo CHtml::encode($data->PENANGGUNG_JAWAB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_KELAMIN')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_KELAMIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOTO_PESERTA')); ?>:</b>
	<?php echo CHtml::encode($data->FOTO_PESERTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_HP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_HP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MASA_BERLAKU_AWAL')); ?>:</b>
	<?php echo CHtml::encode($data->MASA_BERLAKU_AWAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MASA_BERLAKU_AKHIR')); ?>:</b>
	<?php echo CHtml::encode($data->MASA_BERLAKU_AKHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_MODIFIKASI')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_MODIFIKASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPAT_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPAT_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_LAHIR); ?>
	<br />

	*/ ?>

</div>