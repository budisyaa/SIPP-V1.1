<?php
/* @var $this HasilController */
/* @var $model Hasil */

$this->breadcrumbs=array(
	'Hasils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hasil', 'url'=>array('index')),
	array('label'=>'Manage Hasil', 'url'=>array('admin')),
);
?>

<h1>Create Hasil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>