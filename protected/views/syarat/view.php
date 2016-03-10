<?php
/* @var $this SyaratController */
/* @var $model Syarat */

$this->breadcrumbs=array(
	'Syarats'=>array('index'),
	$model->ID_SYARAT,
);

$this->menu=array(
	array('label'=>'List Syarat', 'url'=>array('index')),
	array('label'=>'Create Syarat', 'url'=>array('create')),
	array('label'=>'Update Syarat', 'url'=>array('update', 'id'=>$model->ID_SYARAT)),
	array('label'=>'Delete Syarat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_SYARAT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Syarat', 'url'=>array('admin')),
);
?>

<h1>View Syarat #<?php echo $model->ID_SYARAT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_SYARAT',
		'ID_PESERTA',
		'SYARAT1',
		'SYARAT2',
		'SYARAT3',
	),
)); ?>
<h3>Berkas Syarat:</h3>
	<a href="<?php echo Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT1; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->SYARAT1), Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT1,array('target'=>'_blank'));
        ?>
    </a>
    <a href="<?php echo Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT2; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->SYARAT2), Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT2,array('target'=>'_blank'));
        ?>
    </a>
    <a href="<?php echo Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT3; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->SYARAT3), Yii::app()->request->baseUrl . '/upload/syarat/' . $model->SYARAT3,array('target'=>'_blank'));
        ?>
    </a>
