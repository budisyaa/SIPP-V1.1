

<h4>HASIL PENELITIAN</h4>
<ul>
<?php 
$modelHasil=Hasil::model()->findAll(
array(
	'order'=>'ID_HASIL DESC',
	
	)
								 	);
	foreach ($modelHasil as $dataHasil):
?>
	<li><a href="#"><?php echo CHtml::encode($dataHasil->NAMA_HASIL);?></a></li>
	<?php endforeach; ?>
	</ul>
				
