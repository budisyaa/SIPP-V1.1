<?php
/* @var $this SyaratController */
/* @var $model Syarat */

$this->breadcrumbs=array(
	'Syarats'=>array('index'),
	$model->ID_SYARAT,
);

$this->menu=array(
	array('label'=>'List Syarat', 'url'=>array('index')),
	array('label'=>'Create Syarat', 'url'=>array('create')),
	array('label'=>'Update Syarat', 'url'=>array('update', 'id'=>$model->ID_SYARAT)),
	array('label'=>'Delete Syarat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_SYARAT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Syarat', 'url'=>array('admin')),
);
?>

<h1>View Syarat #<?php echo $model->ID_SYARAT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_SYARAT',
		'ID_PESERTA',
		'SYARAT1',
		'SYARAT2',
		'SYARAT3',
		'SYARAT4',
		'SYARAT5',
	),
)); ?>
