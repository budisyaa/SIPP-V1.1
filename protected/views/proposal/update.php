<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	$model->ID_PROPOSAL=>array('view','id'=>$model->ID_PROPOSAL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'View Proposal', 'url'=>array('view', 'id'=>$model->ID_PROPOSAL)),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
?>

<h1>Update Proposal <?php echo $model->ID_PROPOSAL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>