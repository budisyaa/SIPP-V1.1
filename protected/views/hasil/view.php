<?php
/* @var $this HasilController */
/* @var $model Hasil */

$this->breadcrumbs=array(
	'Hasils'=>array('index'),
	$model->ID_HASIL,
);

$this->menu=array(
	array('label'=>'List Hasil', 'url'=>array('index')),
	array('label'=>'Create Hasil', 'url'=>array('create')),
	array('label'=>'Update Hasil', 'url'=>array('update', 'id'=>$model->ID_HASIL)),
	array('label'=>'Delete Hasil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_HASIL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hasil', 'url'=>array('admin')),
);
?>

<h1>View Hasil #<?php echo $model->ID_HASIL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_HASIL',
		'ID_PESERTA',
		'NAMA_HASIL',
		'NAMA_HASIL2',
	),
)); ?>

<h3>Berkas Syarat:</h3>
	<a href="<?php echo Yii::app()->request->baseUrl . '/upload/hasil/' . $model->NAMA_HASIL; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->NAMA_HASIL), Yii::app()->request->baseUrl . '/upload/hasil/' . $model->NAMA_HASIL,array('target'=>'_blank'));
        ?>
    </a>
    <br>
    <a href="<?php echo Yii::app()->request->baseUrl . '/upload/hasil/' . $model->NAMA_HASIL2; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->NAMA_HASIL2), Yii::app()->request->baseUrl . '/upload/hasil/' . $model->NAMA_HASIL2,array('target'=>'_blank'));
        ?>
    </a>
    </br>
