<?php
/* @var $this OperatorController */
/* @var $data Operator */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_opr')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_opr), array('view', 'id'=>$data->id_opr)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_opr')); ?>:</b>
	<?php echo CHtml::encode($data->nama_opr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_opr')); ?>:</b>
	<?php echo CHtml::encode($data->foto_opr); ?>
	<br />


</div>