<?php
/* @var $this ArtikelController */
/* @var $model Artikel */

$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->ID_ARTIKEL,
);

$this->menu=array(
	array('label'=>'List Artikel', 'url'=>array('index')),
	array('label'=>'Create Artikel', 'url'=>array('create')),
	array('label'=>'Update Artikel', 'url'=>array('update', 'id'=>$model->ID_ARTIKEL)),
	array('label'=>'Delete Artikel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ARTIKEL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artikel', 'url'=>array('admin')),
);
?>

<h1>View Artikel #<?php echo $model->ID_ARTIKEL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ARTIKEL',
		'JUDUL_ART',
		'ISI_ART',
		'FOTO_ART',
		'TANGGAL_POST',
	),
)); ?>
