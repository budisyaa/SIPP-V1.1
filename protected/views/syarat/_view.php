<?php
/* @var $this SyaratController */
/* @var $data Syarat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SYARAT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SYARAT), array('view', 'id'=>$data->ID_SYARAT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PESERTA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PESERTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SYARAT1')); ?>:</b>
	<?php echo CHtml::encode($data->SYARAT1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SYARAT2')); ?>:</b>
	<?php echo CHtml::encode($data->SYARAT2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SYARAT3')); ?>:</b>
	<?php echo CHtml::encode($data->SYARAT3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SYARAT4')); ?>:</b>
	<?php echo CHtml::encode($data->SYARAT4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SYARAT5')); ?>:</b>
	<?php echo CHtml::encode($data->SYARAT5); ?>
	<br />


</div>