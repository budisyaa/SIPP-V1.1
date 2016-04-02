<style type="text/css">
td {
	font-size: 12px;
	vertical-align: top;
}
</style>
<div>
  <?php
        /* menampilkan gambar */
        echo CHtml::image(Yii::app()->request->baseUrl . '/upload/artikel/kepalas.png' . '', '', array(/*"style" => "width:80px;margin-left:10px;", "class" => "center", 'hspace' => 12*/));
    ?>  
</div>

<table width="100%" border="0">
  <tr>
    <td width="5%">III.</td>
    <td colspan="2">Memberikan izin kepada:</td>
  </tr>
  <tr>
    <td rowspan="9">&nbsp;</td>
    <td width="35%">1. Nama</td>
    <td> : </td>
    <td width="60%"><strong><?php echo $model->NAMA; ?></strong></td>
  </tr>
  <tr>
    <td>2. Alamat</td>
    <td> : </td>
    <td><?php echo $model->ALAMAT; ?></td>
  </tr>
  <tr>
    <td>3. Pekerjaan</td>
    <td> : </td>
    <td><?php echo $model->PEKERJAAN; ?></td>
  </tr>
  <tr>
    <td>4. Judul Penelitian</td>
    <td> : </td>
    <td><strong><?php echo $model->JUDUL; ?></strong></td>
  </tr>
  <tr>
    <td>5. Bidang</td>
    <td> : </td>
    <td><?php echo $model->BIDANG; ?></td>
  </tr>
  <tr>
    <td>6. Lokasi Penelitian</td>
    <td> : </td>
    <td><?php echo $model->LOKASI_PT; ?></td>
  </tr>
  <tr>
    <td>7. Masa Berlaku</td>
    <td> : </td>
    <td>3 bulan (<?php echo $model->MASA_BERLAKU_AWAL; ?> s/d <?php echo $model->MASA_BERLAKU_AKHIR; ?>)</td>
  </tr>
  <tr>
    <td>8. Penanggung Jawab</td>
    <td> : </td>
    <td><strong><?php echo $model->PENANGGUNG_JAWAB; ?></strong></td>
  </tr>
</table>
