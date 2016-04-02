<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Pesertas'=>array('index'),
	$model->ID_PESERTA,
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Create Peserta', 'url'=>array('create')),
	array('label'=>'Update Peserta', 'url'=>array('update', 'id'=>$model->ID_PESERTA)),
	array('label'=>'Delete Peserta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PESERTA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peserta', 'url'=>array('admin')),
);
?>

<h1>View Peserta <?php echo $model->NAMA; ?></h1>

<a href="<?php echo Yii::app()->request->baseUrl . '/upload/foto_peserta/' . $model->FOTO_PESERTA; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::image(Yii::app()->request->baseUrl . '/upload/foto_peserta/' . $model->FOTO_PESERTA . '', '', array("style" => "width:200px;margin-left:10px;", "class" => "left", 'hspace' => 12));
        ?>
    </a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PESERTA',
		'NAMA',
		'NO_ID',
		'JUDUL',
		'ASAL_INS',
		'BIDANG',
		'PEKERJAAN',
		'ALAMAT',
		'LOKASI_PT',
		'PENANGGUNG_JAWAB',
		'JENIS_KELAMIN',
		'FOTO_PESERTA',
		'username',
		'password',
		'NO_HP',
		'EMAIL',
		'STATUS',
		'MASA_BERLAKU_AWAL',
		'MASA_BERLAKU_AKHIR',
		'TANGGAL_MODIFIKASI',
		'TANGGAL_DAFTAR',
		'TEMPAT_LAHIR',
		'TANGGAL_LAHIR',
		'code_reg',
		'status_peserta',
		'STATUS_HASIL',
	),
)); ?>
