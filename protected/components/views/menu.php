<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-pills nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<!-- <li><a class="ajax-link" href="<?php echo Yii::app()->homeUrl?>"><i class="icon-home"></i><span
								class="hidden-tablet"> Dashboard</span> </a></li> -->
						<!-- <?php foreach (Main::adminmenu() as $key=>$menu){
							echo '<li><a class="ajax-link" href="'.Yii::app()->createUrl($menu['url']['0']).'"><i class="icon-home"></i><span
								class="hidden-tablet"> '.$menu['label'].'</span> </a></li>';
						}?> -->

<!-- 						<?php
						if(isset(Yii::app()->user->adminLogin)||isset(Yii::app()->user->pesertaLogin)) {
						?>
						<li><a class="ajax-link" href="<?php if(isset(Yii::app()->user->adminLogin)) echo Yii::app()->createUrl('/Manageadmin/admin')?>"><i
								class="icon-user"></i><span class="hidden-tablet"> Data User</span>
						</a></li>


						<?php }?> -->

						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('manageadmin/index')?>"><i class="icon-home"></i><span
								class="hidden-tablet"> Dashboard</span> </a></li>
						<?php
						if(isset(Yii::app()->user->adminLogin)) {
						?>


						
						<li><a class="ajax-link" href="<?php if(isset(Yii::app()->user->adminLogin)) echo Yii::app()->createUrl('/Manageadmin/admin')?>"><i
								class="icon-user"></i><span class="hidden-tablet"> Data User</span>
						</a></li>

						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('Peserta/admin')?>"><i
								class="icon-user"></i><span class="hidden-tablet"> Data Peserta</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('/masaberlaku/admin')?>"><i
								class="icon-calendar"></i><span class="hidden-tablet"> Data Masa Berlaku</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('proposal/admin')?>"><i
								class="icon-folder-open"></i><span class="hidden-tablet"> Data Proposal</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('syarat/admin')?>"><i
								class="icon-folder-open"></i><span class="hidden-tablet"> Data Syarat</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('hasil/admin')?>"><i
								class="icon-folder-open"></i><span class="hidden-tablet"> Data Hasil</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('peserta/peserta')?>"><i
								class="icon-list-alt"></i><span class="hidden-tablet"> Data Status Proposal</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('peserta/pesertahasil')?>"><i
								class="icon-list-alt"></i><span class="hidden-tablet"> Data Status Hasil</span>
						</a></li>
						
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('artikel/admin')?>"><i
								class="icon-align-center"></i><span class="hidden-tablet"> Data Artikel</span>
						</a></li>
						<?php }?>

						<?php
						if(isset(Yii::app()->user->pesertaLogin)) {
							?>
						<?php
						if(isset(Yii::app()->user->pesertaLogin) && Peserta::cekstatus(Yii::app()->user->id) != null) {
						?>
												
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('/akun/tambahproposal')?>"><i
								class="icon-align-center"></i><span class="hidden-tablet"> Unggah Proposal</span>
						</a></li>


						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('/akun/tambahsyarat')?>"><i
								class="icon-align-center"></i><span class="hidden-tablet"> Unggah Syarat</span>
						</a></li>

						<?php } else {?>
							<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('#')?>"><i
								class="icon-align-center"></i><span class="hidden-tablet"> Cetak SK.Penelitian</span>
						</a></li>

						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('/akun/tambahhasil')?>"><i
								class="icon-align-center"></i><span class="hidden-tablet"> Unggah Hasil</span>
						</a></li>
						<?php }?>	
						<?php }?>
						
						<!-- <li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/ui')?>"><i class="icon-eye-open"></i><span
								class="hidden-tablet"> UI Features</span> </a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/form')?>"><i class="icon-edit"></i><span
								class="hidden-tablet"> Forms</span> </a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/chart')?>"><i
								class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span>
						</a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/typography')?>"><i
								class="icon-font"></i><span class="hidden-tablet"> Typography</span>
						</a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/gallery')?>"><i
								class="icon-picture"></i><span class="hidden-tablet"> Gallery</span>
						</a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/table')?>"><i
								class="icon-align-justify"></i><span class="hidden-tablet">
									Tables</span> </a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/calendar')?>"><i
								class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span>
						</a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/grid')?>"><i class="icon-th"></i><span
								class="hidden-tablet"> Grid</span> </a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/icon')?>"><i class="icon-star"></i><span
								class="hidden-tablet"> Icons</span> </a></li>
						<li><a class="ajax-link" href="<?php echo Yii::app()->createUrl('site/index/view/file-manager')?>"><i
								class="icon-folder-open"></i><span class="hidden-tablet"> File
									Manager</span> </a></li>
						<li><a href="<?php echo Yii::app()->createUrl('site/index/view/tour')?>"><i class="icon-globe"></i><span
								class="hidden-tablet"> Tour</span> </a></li>
						 
						
					</ul> -->
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input
						id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div>
				<!--/.well -->
			</div><!--/span-->