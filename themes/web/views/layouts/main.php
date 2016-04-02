<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Sistem Informasi Penelitian dan Pengembangan : Kabupaten BANYUMAS</title>
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/font-oswald.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/font-lato.css' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquerynew.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---header---->			
<div class="header">  
	 <div class="container">
		  <div class="logo">
			  <a href="/SIPP/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.jpg" title="" /></a>
		  </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				 <div class="search">
					 <form>
					 <input type="text" placeholder="" required="">
					 <input type="submit" value=""/>
					 </form>
				 </div>


				  <span class="menu"> </span> 
				   <ul>
				   		<li><a href="/SIPP/">BERANDA</a></li>						
						<li><a href="<?php echo Yii::app()->baseUrl?>/site/tentang">TENTANG KAMI</a></li>	
						<li><a href="<?php echo Yii::app()->baseUrl?>/site/arsip">ARSIP</a></li>
						<?php
						if(isset(Yii::app()->user->pesertaLogin)) {
						?>
						<li><a href="<?php echo Yii::app()->baseUrl?>/akun/pesertainfo"><?php echo Yii::app()->user->name?></a></li>
						<li><a href="site/logout">LOGOUT</a></li>
						<?php }?>
						<?php
						if(!isset(Yii::app()->user->pesertaLogin) && !isset(Yii::app()->user->adminLogin)) {
						?>
						<li><a href="site/login">MASUK</a></li>
						<li><a href="akun/daftar">DAFTAR</a></li>
						<?php }?>						
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
	 </div>
</div>
<!--/header-->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">					 
					 <!-- <div class="content-grid-info">
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
					 <?php echo $content?>
					 
				 </div>
			  </div>
			  <div class="col-md-4 content-right">
				 <div class="recent">

					 <h3>HASIL PENELITIAN</h3>
					 <ul>
					 <?php 
				 		$modelHasil=Hasil::model()->findAll(
					 		array(
					 			'order'=>'ID_HASIL DESC',
					 			'limit'=>'5',
					 		)
				 	);
				 	foreach ($modelHasil as $dataHasil):
				 ?>
					 <li><a href="#"><?php echo CHtml::encode($dataHasil->NAMA_HASIL);?></a></li>
					<?php endforeach; ?>
					 </ul>
				 </div>
				 <div class="clearfix"></div>
			  </div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
	 <p>Copyrights © 2016 Budi Sya'adal Fauzi <a href="http://if.unsoed.ac.id/portal/">Teknik Informatika</a> Universitas Jenderal Soedirman | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>