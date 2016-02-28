<?php
/* @var $this SyaratController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Syarats',
);

$this->menu=array(
	array('label'=>'Create Syarat', 'url'=>array('create')),
	array('label'=>'Manage Syarat', 'url'=>array('admin')),
);
?>

<h1>Syarats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
