<?php
/* @var $this OperatorController */
/* @var $model Operator */

$this->breadcrumbs=array(
	'Operators'=>array('index'),
	$model->id_opr,
);

$this->menu=array(
	array('label'=>'List Operator', 'url'=>array('index')),
	array('label'=>'Create Operator', 'url'=>array('create')),
	array('label'=>'Update Operator', 'url'=>array('update', 'id'=>$model->id_opr)),
	array('label'=>'Delete Operator', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_opr),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operator', 'url'=>array('admin')),
);
?>

<h1>View Operator #<?php echo $model->id_opr; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_opr',
		'nama_opr',
		'username',
		'password',
		'foto_opr',
	),
)); ?>
