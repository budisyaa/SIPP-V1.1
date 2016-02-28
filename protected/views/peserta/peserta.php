<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Pesertas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Create Peserta', 'url'=>array('create')),
);


?>

<h1>Kelola Data Status</h1>




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'peserta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NAMA',
		'JUDUL',
		'MASA_BERLAKU_AWAL',
		'MASA_BERLAKU_AKHIR',
		
		array(
            'name' => 'STATUS',
            'type' => 'raw',
            'header' => 'Status',
            'value' => 'CHtml::encode($data->formatStatus())',
            'htmlOptions' => array('width' => '20'),
        ),
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
			'template' => '{updatestatus}',
			'buttons'=>array
			(
				'updatestatus' => array
				(
					'label'=>'update status',
					'url'=>'Yii::app()->controller->createUrl("updatestatus",array("id"=>$data->primaryKey))',
				),
			),
		),
	),
)); ?>
