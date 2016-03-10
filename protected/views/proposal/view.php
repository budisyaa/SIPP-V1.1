<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	$model->ID_PROPOSAL,
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'Update Proposal', 'url'=>array('update', 'id'=>$model->ID_PROPOSAL)),
	array('label'=>'Delete Proposal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PROPOSAL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
?>

<h1>View Proposal #<?php echo $model->ID_PROPOSAL; ?></h1>
    <!-- CHtml::link(CHtml::encode($model->ApplicationDocument ),array(Yii::app()->baseUrl . '/assets/uploads/documents/'.$model->ApplicationDocument))
    CHtml::link(CHtml::encode($model->ApplicationDocument), Yii::app()->baseUrl . 'assets/uploads/documents/' . $model->ApplicationDocument,array('target'=>'_blank') -->


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PROPOSAL',
		'ID_PESERTA',
		'NAMA_PROPOSAL',
	),
)); ?>
<h3>Berkas Proposal:</h3>
<a href="<?php echo Yii::app()->request->baseUrl . '/upload/proposal/' . $model->NAMA_PROPOSAL; ?>">
        <?php
        /* menampilkan gambar */
        echo CHtml::link(CHtml::encode($model->NAMA_PROPOSAL), Yii::app()->request->baseUrl . '/upload/proposal/' . $model->NAMA_PROPOSAL,array('target'=>'_blank'));
        ?>
    </a>

