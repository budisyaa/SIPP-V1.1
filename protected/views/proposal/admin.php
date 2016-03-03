<?php
/* @var $this ProposalController */
/* @var $model Proposal */

$this->breadcrumbs=array(
	'Proposals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proposal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data Proposal</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proposal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_PROPOSAL',
		// 'ID_PESERTA',
		array(  'name'=>'ID_PESERTA', 
                        'type'=>'html', 
			'value'=>'$data->iDPESERTA->NAMA','sortable'=>TRUE,
		
	                ),
		// 'NAMA_PROPOSAL',
		array(
				'name'=>'NAMA_PROPOSAL',
				'header'=>'Nama Proposal',
				'type'=>'html',
				'value'=>'CHtml::link("$data->NAMA_PROPOSAL", array("view", "id"=>$data->ID_PROPOSAL),array("title"=>"click to view order"))',
				 
			),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
