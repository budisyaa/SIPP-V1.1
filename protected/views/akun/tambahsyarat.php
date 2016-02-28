<?php
/*untuk membuat breadcrumbs*/
$this -> breadcrumbs = array('My account', );
?>
<div style="border-top:1px solid #CCC;margin: 5px 0 0 5px;"></div>
<div style="height:auto; text-align:justify; padding-right: 3px ;margin-left:5px;margin-bottom:5px;" class="leftbox">

    <h3 style="float: left; margin-right: 15px; padding-right:12px;margin-bottom:20px;"> Silahkan login, jika anda sudah memiliki account </h3>

    <div style="margin-left: 15px;clear: both;">
        <?php
        $this -> renderPartial('_formSyarat', array('model' => $model));
        ?>
    </div>

</div>


</div>
