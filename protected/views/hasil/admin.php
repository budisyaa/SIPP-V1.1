<?php
/* @var $this HasilController */
/* @var $model Hasil */

$this->breadcrumbs=array(
	'Hasils'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Hasil', 'url'=>array('index')),
	array('label'=>'Create Hasil', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hasil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data Hasil</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hasil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_HASIL',
		// 'ID_PESERTA',
		array(  'name'=>'ID_PESERTA', 
                        'type'=>'html', 
			'value'=>'$data->iDPESERTA->NAMA','sortable'=>TRUE,
		
	                ),
		'NAMA_HASIL',
		'NAMA_HASIL2',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
