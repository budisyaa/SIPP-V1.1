<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
		'Login',
);
?>

<div class="container-fluid">
	<div class="row-fluid">

		<div class="row-fluid">
			<div class="span12 center login-header">
				<h2>Selamat Datang di</h2>
				<h1>Sistem Informasi Penelitian dan Pengembangan</h1>
				<h1>Kabupaten Banyumas</h1>
				<h1><img alt="Yiirisma Logo" src="<?php echo Yii::app()->baseUrl?>/img/logo-bappeda90.png" /></a></h1>
			</div>
			<div class="span12 center login-header">
			</div>
			<!--/span-->
		</div>
		<!--/row-->

		<div class="row-fluid">
			<div class="well span5 center login-box">
				<div class="alert alert-info">Silahkan masukkan Username dan Password anda.</div>
				<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
								'validateOnSubmit'=>true,
						),
						'htmlOptions'=>array('class'=>'form-horizontal')
				)); ?>
					<fieldset>
						<div class="input-prepend" title="Username" data-rel="tooltip">
							<span class="add-on"><i class="icon-user"></i> </span>
							<?php echo $form -> textField($model, 'username'); ?>
							
							<?php echo $form->error($model,'username'); ?>
						</div>
						<div class="clearfix"></div>

						<div class="input-prepend" title="Password" data-rel="tooltip">
							<span class="add-on"><i class="icon-lock"></i> </span>
							<?php echo $form -> passwordField($model, 'password'); ?>
							<?php echo $form->error($model,'password'); ?>
							
						</div>
						<div class="clearfix"></div>
						<div class="input-prepend">
							<label class="remember" for="remember">
							<?php echo $form->checkBox($model,'rememberMe'); ?>
							<?php echo $form->error($model,'rememberMe'); ?>
							Remember me</label>
						</div>
						<div class="clearfix"></div>

						<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
						</p>
					</fieldset>
				<?php $this->endWidget(); ?>
			</div>
			<!--/span-->
		</div>
		<!--/row-->
	</div>
	<!--/fluid-row-->
</div>
