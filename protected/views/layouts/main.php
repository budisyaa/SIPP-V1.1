<?php /* @var $this Controller  */?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->renderPartial('//layouts/includes/head');?>
</head>
<body>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
				</a> <a class="brand" href="<?php echo Yii::app()->baseUrl?>"> <img
					alt="Yiirisma Logo"
					src="<?php echo Yii::app()->baseUrl?>/img/logo20.png" /> <span>SIPP</span>
				</a>
				<!-- theme selector starts -->
				<!-- <div class="btn-group pull-right theme-container">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-tint"></i><span class="hidden-phone"> Change Theme /
							Skin</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i>
								Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i>
								Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i>
								Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a>
						</li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i>
								Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i>
								Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i>
								Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i>
								Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i>
								United</a></li>
					</ul>
				</div> -->
				<!-- theme selector ends -->
				<?php /*  */?>

				<!-- user dropdown starts -->
				<!-- <div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->user->name?>
					</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						
						<li><a href="/SIPP/site/login">Login</a></li>
						<li class="divider"></li>
						<li><a href="/SIPP/akun/daftar">Daftar</li>
						<li><?php echo CHtml::link('Logout',array('/site/logout'));?></li>
					</ul>
				</div> -->

				<?php
					if(isset(Yii::app()->user->pesertaLogin)) {
				?>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->user->name?>
					</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->baseUrl?>/akun/pesertainfo">Profil</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo Yii::app()->baseUrl?>/akun/ubahprofil">Ubah Profil</a></li>
						<li class="divider"></li>
						<li><?php echo CHtml::link('Logout',array('/site/logout'));?></li>
					</ul>
				</div>
				<?php }?>
				<!-- peserta dropdown ends -->

				<?php
					if(isset(Yii::app()->user->adminLogin)) {
				?>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->user->name?>
					</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->baseUrl?>#">Profil</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo Yii::app()->baseUrl?>/Manageadmin/updateadmin">Ubah Profil</a></li>
						<li class="divider"></li>
						<li><?php echo CHtml::link('Logout',array('/admin/logout'));?></li>
					</ul>
				</div>
				<?php }?>

				<?php
					if(isset(Yii::app()->user->operatorLogin)) {
				?>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i
						class="icon-user"></i><span class="hidden-phone"> <?php echo Yii::app()->user->name?>
					</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->baseUrl?>#">Profil</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo Yii::app()->baseUrl?>/Manageadmin/updateadmin">Ubah Profil</a></li>
						<li class="divider"></li>
						<li><?php echo CHtml::link('Logout',array('/admin/logout'));?></li>
					</ul>
				</div>
				<?php }?>


				<?php
					if(!isset(Yii::app()->user->pesertaLogin) && !isset(Yii::app()->user->adminLogin) && !isset(Yii::app()->user->operatorLogin)) {
				?>
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="<?php echo Yii::app()->baseUrl?>/akun/daftar">Daftar Penelitian</a></li>
						<li><a href="<?php echo Yii::app()->baseUrl?>/site/login">Login</a></li>
						<li>
						</li>
					</ul>
				</div>
				<?php }?>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<div class="container-fluid">
		<div class="row-fluid">
			<!-- left menu starts -->
			<?php $this->widget('Wmain',array('view'=>'menu'));?>
			<!-- left menu ends -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>
						You need to have <a href="http://en.wikipedia.org/wiki/JavaScript"
							target="_blank">JavaScript</a> enabled to use this site.
					</p>
				</div>
			</noscript>

			<div id="content" class="span10">
				<!-- content starts -->
				<div>
					<!-- <div class="breadcrumb"> -->
						<!-- <?php
						if(empty($this->breadcrumbs))
							$this->breadcrumbs = array ('');
						$this->widget('zii.widgets.CBreadcrumbs', array(
					 		'links'=>$this->breadcrumbs,
						)); ?> -->
						<!-- breadcrumbs -->

					</div>
				<!-- </div> -->
				<?php foreach (Yii::app()->user->getFlashes() as $key=>$message){
					echo '<div class="alert alert-'.$key.'">
					<button type="button" class="close" data-dismiss="alert">×</button>'.ucfirst($message).'</div>';
				}?>
				<?php echo $content;?>

				<!-- content ends -->
			</div>
			<!--/#content.span10-->
		</div>
		<!--/fluid-row-->
		<hr>
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">�</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a> <a href="#"
					class="btn btn-primary">Save changes</a>
			</div>
		</div>
		<footer>
			<p class="pull-left">
				Copyright 2016 | Budi Sya'adal Fauzi Teknik Informatika Universitas Jenderal Soedirman
			</p>
			<p class="pull-right">
				Template by : <a href="https://github.com/Chaulagain-Softwares/yiirisma">Yiirisma</a>
			</p>
		</footer>
	</div>
	<!--/.fluid-container-->
	<?php $this->renderPartial('//layouts/includes/foot');?>
</body>
</html>
