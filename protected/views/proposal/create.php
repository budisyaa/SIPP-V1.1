<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
?>

<h1>Create Proposal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>