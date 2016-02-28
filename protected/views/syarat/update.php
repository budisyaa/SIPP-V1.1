<?php
/* @var $this SyaratController */
/* @var $model Syarat */

$this->breadcrumbs=array(
	'Syarats'=>array('index'),
	$model->ID_SYARAT=>array('view','id'=>$model->ID_SYARAT),
	'Update',
);

$this->menu=array(
	array('label'=>'List Syarat', 'url'=>array('index')),
	array('label'=>'Create Syarat', 'url'=>array('create')),
	array('label'=>'View Syarat', 'url'=>array('view', 'id'=>$model->ID_SYARAT)),
	array('label'=>'Manage Syarat', 'url'=>array('admin')),
);
?>

<h1>Update Syarat <?php echo $model->ID_SYARAT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>