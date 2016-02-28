<?php
/* @var $this HasilController */
/* @var $data Hasil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_HASIL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_HASIL), array('view', 'id'=>$data->ID_HASIL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PESERTA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PESERTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_HASIL')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_HASIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_HASIL2')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_HASIL2); ?>
	<br />


</div>