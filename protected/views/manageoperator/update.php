<?php
/* @var $this OperatorController */
/* @var $model Operator */

$this->breadcrumbs=array(
	'Operators'=>array('index'),
	$model->id_opr=>array('view','id'=>$model->id_opr),
	'Update',
);

$this->menu=array(
	array('label'=>'List Operator', 'url'=>array('index')),
	array('label'=>'Create Operator', 'url'=>array('create')),
	array('label'=>'View Operator', 'url'=>array('view', 'id'=>$model->id_opr)),
	array('label'=>'Manage Operator', 'url'=>array('admin')),
);
?>

<h1>Update Operator <?php echo $model->id_opr; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>