<?php
/* @var $this ProposalController */
/* @var $data Proposal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PROPOSAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PROPOSAL), array('view', 'id'=>$data->ID_PROPOSAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PESERTA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PESERTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_PROPOSAL')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_PROPOSAL); ?>
	<br />


</div>