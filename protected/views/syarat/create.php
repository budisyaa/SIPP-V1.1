<?php
/* @var $this SyaratController */
/* @var $model Syarat */

$this->breadcrumbs=array(
	'Syarats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Syarat', 'url'=>array('index')),
	array('label'=>'Manage Syarat', 'url'=>array('admin')),
);
?>

<h1>Create Syarat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>