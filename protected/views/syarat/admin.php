<?php
/* @var $this SyaratController */
/* @var $model Syarat */

$this->breadcrumbs=array(
	'Syarats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Syarat', 'url'=>array('index')),
	array('label'=>'Create Syarat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#syarat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data Syarat</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'syarat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_SYARAT',
		// 'ID_PESERTA',
		array(  'name'=>'ID_PESERTA', 
                        'type'=>'html', 
			'value'=>'$data->iDPESERTA->NAMA','sortable'=>TRUE,
		
	                ),
		'SYARAT1',
		'SYARAT2',
		'SYARAT3',
		/*'SYARAT4',
		'SYARAT5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
