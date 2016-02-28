<?php
/* @var $this HasilController */
/* @var $model Hasil */

$this->breadcrumbs=array(
	'Hasils'=>array('index'),
	$model->ID_HASIL=>array('view','id'=>$model->ID_HASIL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hasil', 'url'=>array('index')),
	array('label'=>'Create Hasil', 'url'=>array('create')),
	array('label'=>'View Hasil', 'url'=>array('view', 'id'=>$model->ID_HASIL)),
	array('label'=>'Manage Hasil', 'url'=>array('admin')),
);
?>

<h1>Update Hasil <?php echo $model->ID_HASIL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>