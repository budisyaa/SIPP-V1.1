<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Pesertas'=>array('index'),
	'Manage',
);
// echo CHtml::image(Yii::app()->request->baseUrl . 'upload/foto_peserta/' . $model->FOTO_PESERTA . '', '', array("style" => "width:200px;margin-left:10px;", "class" => "left", 'hspace' => 12));

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Create Peserta', 'url'=>array('create')),
);


?>

<h1>Kelola Data Peserta</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'peserta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NAMA',
		'JUDUL',
		'LOKASI_PT',
		'ASAL_INS',
		'EMAIL',		
		/*
		'ID_PESERTA',
		'PEKERJAAN',
		'ALAMAT',
		'NO_ID',
		'PENANGGUNG_JAWAB',
		'JENIS_KELAMIN',
		'FOTO_PESERTA',
		'USERNAME',
		'PASSWORD',
		'NO_HP',
		'BIDANG',
		'STATUS',
		'MASA_BERLAKU_AWAL',
		'MASA_BERLAKU_AKHIR',
		'TANGGAL_MODIFIKASI',
		'TEMPAT_LAHIR',
		'TANGGAL_LAHIR',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
