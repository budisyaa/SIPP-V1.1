<!--  <div class="content-grid-info">
	 <img src="images/post1.jpg" alt=""/>
	 <div class="post-info">
	 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
	 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
	 <a href="single.html"><span></span>READ MORE</a>
	 </div>
 </div>
 <div class="content-grid-info">
	 <img src="images/post2.jpg" alt=""/>
	 <div class="post-info">
	 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
	 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
	 <a href="single.html"><span></span>READ MORE</a>
	 </div>
 </div>
 <div class="content-grid-info">
	 <img src="images/post3.jpg" alt=""/>
	 <div class="post-info">
	 <h4><a href="single.html">Lorem ipsum dolor sit amet</a>  July 30, 2014 / 27 Comments</h4>
	 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.</p>
	 <a href="single.html"><span></span>READ MORE</a>
	 </div>
 </div> -->

 <?php
/*ambil semua data kategori*/
$model=Artikel::model()->findAll();
/*foreach data kategori*/
foreach ($model as $data):
?>
	<div class="content-grid-info">
		<img src="<?php echo Yii::app()->request->baseUrl . '/upload/artikel/' . $data->FOTO_ART; ?>" alt=""/>
		<div class="post-info">
			<h4><a href="#"><?php echo CHtml::encode($data->JUDUL_ART);?></a><?php echo CHtml::encode($data->TANGGAL_POST);?></h4>
			<p><?php echo CHtml::encode($data->ISI_ART);?></p>
			<a href=""><span></span>LEBIH LANJUT</a>
		</div>
	</div>
<?php endforeach;?>



