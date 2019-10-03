<?php  
error_reporting(0);
include('session.php');
include('table_styles.php'); 
$send_forma = $_POST['send_forma']; 
if(isset($send_forma)){

 

$fasad_material_verh = $_POST['fasad_material_verh'];
$fasad_dekor_verh = $_POST['fasad_dekor_verh'];
$kromka_fasad_verh = $_POST['kromka_fasad_verh'];
$structura_fasad_verh = $_POST['structura_fasad_verh'];
$dop_comment_fasad_verh_verh = $_POST['dop_comment_fasad_verh_verh'];
//niz
$fasad_material_niz = $_POST['fasad_material_niz'];
$fasad_dekor_niz = $_POST['fasad_dekor_niz'];
$kromka_fasad_niz = $_POST['kromka_fasad_niz'];
$structura_fasad_niz = $_POST['structura_fasad_niz'];
$dop_comment_fasad_niz_niz = $_POST['dop_comment_fasad_niz_niz'];
//obwi komment
$obw_komment_na_vse_fas_name = $_POST['obw_komment_na_vse_fas_name'];
//каркасы
$karcas_vibor_verh = $_POST['karcas_vibor_verh'];
$dop_com_verh_carcas = $_POST['dop_com_verh_carcas'];
$karcas_vibor_niz = $_POST['karcas_vibor_niz'];
$dop_com_vniz_carcas = $_POST['dop_com_vniz_carcas'];
$dop_com_all_carcas = $_POST['dop_com_all_carcas'];
$stolewnica_osnovn_decor = $_POST['stolewnica_osnovn_decor'];
$name_osn_stenov = $_POST['name_osn_stenov'];

}
?>
<style type="text/css">
  .xl12726699 {    white-space: normal!important;  }
</style>
<form>
  <table cellpadding="0" cellspacing="0">
   <tbody id="tboda"><tr>
    <td rowspan="2" height="26" class="xl16126699" width="87" style="border-bottom:
    1.0pt solid black;height:19.5pt;width:65pt">&nbsp;</td>
   </tr>
  </tbody></table>
  </span></td>
  <td colspan="7" rowspan="2" class="xl16326699" width="645" style="border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;width:486pt">Обязательный бланк заказа ООО Монтанья</td>
  <td colspan="3" rowspan="2" class="xl23626699" width="346" style="border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;width:260pt">&nbsp;</td>
 </tr>
 <tr height="13" style="mso-height-source:userset;height:9.75pt">
 </tr>
 <tr height="17" style="mso-height-source:userset;height:12.75pt">
  <td colspan="2" height="17" class="xl21626699" style="border-right:1.0pt solid black;
  height:12.75pt">&nbsp;</td>
  <td colspan="2" class="xl22526699" style="border-right:1.0pt solid black;
  border-left:none">&nbsp;</td>
  <td colspan="4" class="xl21626699" style="border-right:1.0pt solid black;
  border-left:none"><?php echo date('d-m-Y H:i'); ?></td>
  <td colspan="2" class="xl22526699" style="border-right:1.0pt solid black;
  border-left:none">Идентификатор клиента: Монтанья <?php echo $_SESSION['id']; ?></td>
  <td class="xl6826699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" height="12" style="mso-height-source:userset;height:9.0pt">
  <td rowspan="2" height="45" class="xl17526699" style="border-bottom:1.0pt solid black;
  height:33.95pt;border-top:none">КАРКАСЫ:</td>
  <td colspan="4" class="xl22226699" style="border-right:1.0pt solid black;
  border-left:none">ВЕРХНИЕ КАРКАСЫ</td>
  <td colspan="4" class="xl21926699" style="border-right:1.0pt solid black;
  border-left:none">НИЖНИЕ КАРКАСЫ</td>
  <td class="xl6926699" style="border-top:none">&nbsp;</td>
  <td rowspan="3" class="xl8026699" style="border-bottom:1.0pt solid black;
  border-top:none">ЦЕНА</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:24.95pt">
  <td colspan="5" height="33" class="xl12726699" style="border-right:1.0pt solid black;
  height:24.95pt;border-left:none"><input id="my_inp" name="karcas_vibor_verh" value="<?php echo $karcas_vibor_verh .'('.$dop_com_verh_carcas.')';  ?>" /></td>
  <td colspan="4" class="xl12526699" style="border-right:1.0pt solid black"><input name="karcas_vibor_niz" id="my_inp" value="<?php echo $karcas_vibor_niz.'('.$dop_com_vniz_carcas.')';  ?>"/></td>
 </tr>
 <tr class="xl6553526699" height="14" style="mso-height-source:userset;height:10.5pt">
  <td rowspan="3" height="80" class="xl17526699" style="border-bottom:1.0pt solid black;
  height:60.4pt;border-top:none">ФАСАДЫ:</td>
  <td colspan="2" class="xl17026699" style="border-right:1.0pt solid black;
  border-left:none">Категории фасадов:</td>
  <td class="xl7026699" style="border-top:none;border-left:none">расп-е</td>
  <td colspan="2" class="xl17026699" style="border-right:1.0pt solid black;
  border-left:none">МАРКИРОВКА</td>
  <td class="xl7126699" style="border-left:none">СТРУКТУРА</td>
  <td colspan="2" class="xl22126699" style="border-right:1.0pt solid black;
  border-left:none">КРОМКА</td>
  <td class="xl7226699">&nbsp;</td>
 </tr>
 <tr height="33" style="mso-height-source:userset;height:24.95pt">
  <td colspan="2" height="33" class="xl12726699" style="border-right:1.0pt solid black;
  height:24.95pt;border-left:none"><input id="my_inp" name="fasad_material_verh" value="<?php echo $fasad_material_verh;  ?>"/></td>
  <td class="xl7326699" style="border-top:none;border-left:none">ВЕРХ</td>
  <td colspan="2" class="xl12726699" style="border-right:1.0pt solid black;
  border-left:none"><input id="my_inp" name="fasad_dekor_verh" value="<?php echo $fasad_dekor_verh;  ?>"/></td>
  <td class="xl9126699" style="border-top:none;border-left:none"><input id="my_inp" name="structura_fasad_verh" value="<?php echo $structura_fasad_verh; ?>"/></td>
  <td class="xl9226699" width="82" style="border-top:none;border-left:none;
  width:62pt"><input id="my_inp" name="kromka_fasad_verh" value="<?php echo $kromka_fasad_verh; ?>"/></td>
  <td class="xl9326699" colspan="2" style="border-top:none">
    <input id="my_inp" name="kromka_fasad_verh" value="<?php echo $dop_comment_fasad_verh_verh; ?>"/>
  </td>

  <td class="xl11226699" style="border-top:none;border-left:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" height="33" style="mso-height-source:userset;height:24.95pt">
  <td colspan="2" height="33" class="xl12726699" style="border-right:1.0pt solid black;
  height:24.95pt;border-left:none"><input id="my_inp" name="fasad_material_niz" value="<?php echo $fasad_material_niz;  ?>"/></td>
  <td class="xl7326699" style="border-top:none;border-left:none">НИЗ</td>
  <td colspan="2" class="xl12726699" style="border-right:1.0pt solid black;
  border-left:none"><input id="my_inp" name="fasad_dekor_niz" value="<?php echo $fasad_dekor_niz;  ?>"/></td>
  <td class="xl9126699" style="border-top:none;border-left:none"><input id="my_inp" name="structura_fasad_niz" value="<?php echo $structura_fasad_niz; ?>"/></td>
  <td class="xl9226699" width="82" style="border-top:none;border-left:none;
  width:62pt"><input id="my_inp" name="kromka_fasad_verh" value="<?php echo $kromka_fasad_verh; ?>"/></td>
  <td class="xl9326699" colspan="2" style="border-top:none">
    <input id="my_inp" name="dop_comment_fasad_niz_niz" value="<?php echo $dop_comment_fasad_niz_niz; ?>"/>
  </td>
  <td class="xl11326699" style="border-left:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" height="14" id="stroka_stolewek" style="mso-height-source:userset;height:10.5pt">
  <td rowspan="2" height="55" class="xl17526699" style="border-bottom:1.0pt solid black;
  height:41.25pt;border-top:none">СТОЛЕШКА:</td>
  <td colspan="2" class="xl17026699" style="border-right:1.0pt solid black;
  border-left:none">ВЫБОР СТОЛЕШНИЦЫ:</td>
  <td class="xl7026699" style="border-top:none;border-left:none">ТОЛЩИНА:</td>
  <td colspan="5" class="xl17126699" style="border-right:1.0pt solid black">РАЗМЕРЫ</td>
  <td class="xl7226699">&nbsp;</td>
  <td class="xl7426699" style="border-left:none">ЦЕНА</td>
 </tr>
 <tr height="41" id="stroka_stolewek"  style="mso-height-source:userset;height:30.75pt">
  <td colspan="2" height="41" class="xl20726699" width="235" style="border-right:1.0pt solid black;
  height:30.75pt;width:177pt"><input id="my_inp" class="stolewnica_osnovn_decor" name="stolewnica_osnovn_decor" value="<?php echo $stolewnica_osnovn_decor; ?>"/></td>


  <td class="xl9626699" style="border-top:none;border-left:none"><input id="my_inp" value="(38)"/></td>
 <?php
foreach ( $_POST['decor_kromka_stol'] as $k=>$m) {
$decor_kromka_stol[$k] = $m;
}
      foreach ( $_POST['name_zaval_stol'] as $k=>$m) {
$name_zaval_stol[$k] = $m;
}
foreach ( $_POST['oper_stol_left'] as $k=>$m) {
$oper_stol_left[$k] = $m;
} 

foreach ( $_POST['oper_stol_right'] as $k=>$m) {
$oper_stol_right[$k] = $m;
}

foreach ( $_POST['dlina_kus_stol'] as $k=>$m) {
$dlina_kus_stol[$k] = $m;
}

foreach ( $_POST['glubina_kusk_stol'] as $k=>$m) {
$glubina_kusk_stol[$k] = $m;
}



foreach ( $_POST['stol_decor'] as $k=>$m) {
$stol_decor[$k] = $m;
}




?>
   <td colspan="6" class="xl12726699" style="white-space: normal;border-right:1.0pt solid black;
  border-left:none">
   <textarea onkeyup="textAreaAdjust(this)" style="height:70;overflow:hidden" id="my_inp" name="stolewki">
   <?php foreach(array_map(NULL, $decor_kromka_stol, $name_zaval_stol,$oper_stol_left, $oper_stol_right, $dlina_kus_stol, $glubina_kusk_stol, $stol_decor) as $x)
{
   list( $decor_kromka_stol, $name_zaval_stol,$oper_stol_left, $oper_stol_right, $dlina_kus_stol, $glubina_kusk_stol, $stol_decor) = $x;
echo '(!)Оклейка: '.$decor_kromka_stol.' завал.: '.$name_zaval_stol.' опер лев.:'.$oper_stol_left.' опер прав. '.$oper_stol_right.' длина:'.$dlina_kus_stol.' глубина:'.$glubina_kusk_stol.' декор:'.$stol_decor.';'; 

 }?></textarea>
  </td>
  <td class="xl7526699" style="border-top:none;border-left:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" id="stroka_stenovoi" height="14" style="mso-height-source:userset;height:10.5pt">
  <td rowspan="2" height="45" class="xl21226699" width="87" style="border-bottom:1.0pt solid black;
  height:33.75pt;border-top:none;width:65pt">СТЕНОВАЯ</td>
  <td colspan="2" class="xl17026699" style="border-right:1.0pt solid black;
  border-left:none">ДЕКОР СТЕНОВОЙ</td>
  <td class="xl7026699" style="border-top:none;border-left:none">МЕТРАЖ</td>
  <td colspan="6" class="xl17026699" style="border-right:1.0pt solid black;
  border-left:none">РАЗМЕРЫ</td>
  <td class="xl7426699" style="border-left:none">ЦЕНА</td>
 </tr>
 <tr id="stroka_stenovoi" class="xl6553526699" height="31" style="mso-height-source:userset;height:23.25pt">
  <td colspan="2" height="31" class="xl20626699" width="235" style="height:23.25pt;
  border-left:none;width:177pt"><input id="my_inp" class="name_osn_stenov" name="name_osn_stenov" value="<?php echo $name_osn_stenov;  ?>"/></td>
  <td class="xl9626699" style="border-top:none"><input id="my_inp" name="metraj_stenov" value="--"/></td>
 



 <?php
foreach ( $_POST['okleika_stenov'] as $k=>$m) {
$okleika_stenov[$k] = $m;
}
      foreach ( $_POST['operations_stenov'] as $k=>$m) {
$operations_stenov[$k] = $m;
}
foreach ( $_POST['dlina_stenovoi'] as $k=>$m) {
$dlina_stenovoi[$k] = $m;
} 

foreach ( $_POST['visota_stenovoi'] as $k=>$m) {
$visota_stenovoi[$k] = $m;
}

foreach ( $_POST['panel_stenov'] as $k=>$m) {
$panel_stenov[$k] = $m;
}



?>
   <td colspan="6" class="xl12726699" style="white-space: normal;border-right:1.0pt solid black;
  border-left:none">
   <textarea onkeyup="textAreaAdjust(this)" style="height:70;overflow:hidden" id="my_inp" name="stenovie">
   <?php foreach(array_map(NULL, $okleika_stenov, $operations_stenov,$dlina_stenovoi, $visota_stenovoi, $panel_stenov) as $x)
{
   list( $okleika_stenov, $operations_stenov,$dlina_stenovoi, $visota_stenovoi, $panel_stenov) = $x;
echo 'Оклейка: '.$okleika_stenov.' операция.: '.$operations_stenov.' длина.:'.$dlina_stenovoi.' выс. '.$visota_stenovoi.' панель:'.$panel_stenov.';'; 

 }?>
</textarea>
  </td>










     </td>
  <td class="xl7626699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" height="33" style="mso-height-source:userset;height:24.95pt">
  <td height="33" class="xl7726699" width="87" style="height:24.95pt;border-top:none;
  width:65pt">ОТДЕЛКА<br>ВИТРИНЫ</td>
  <td colspan="2" class="xl20626699" width="235" style="border-left:none;width:177pt">&nbsp;</td>
  <td class="xl7826699" style="border-top:none">ВИТРАЖ</td>
  <td colspan="2" class="xl12726699" style="border-right:1.0pt solid black;
  border-left:none">&nbsp;</td>
  <td colspan="4" class="xl12726699" style="border-right:1.0pt solid black;
  border-left:none">&nbsp;</td>
  <td class="xl7526699" style="border-top:none;border-left:none">&nbsp;</td>
 </tr>
 <tr class="xl6553526699" height="33" style="mso-height-source:userset;height:24.95pt">
  <td height="33" class="xl7726699" width="87" style="height:24.95pt;border-top:none;
  width:65pt">АЛЮМ ФАСАДЫ</td>
  <td colspan="2" class="xl20626699" width="235" style="border-left:none;width:177pt">&nbsp;</td>
  <td colspan="2" class="xl21026699" style="border-right:1.0pt solid black">&nbsp;</td>
  <td colspan="5" class="xl12726699" style="border-right:1.0pt solid black;
  border-left:none">&nbsp;</td>
  <td class="xl7626699" style="border-top:none">&nbsp;</td>
 </tr>

 <tr height="16" style="mso-height-source:userset;height:12.0pt">
  <td colspan="3" height="16" class="xl20126699" style="border-right:1.0pt solid black;
  height:12.0pt">верх</td>
  <td class="xl8026699" style="border-top:none;border-left:none">высота</td>
  <td class="xl8026699" style="border-top:none;border-left:none">глубина</td>
  <td colspan="5" class="xl23226699" style="border-left:none">доп</td>
  <td class="xl8126699" style="border-top:none">ЦЕНА</td>
 </tr>
 


<?php 
 foreach ( $_POST['korpus_shirina_verh'] as $k=>$m) {
$korpus_shirina_verh[$k] = $m;
}


 foreach ( $_POST['korpus_visota_verh'] as $k=>$m) {
$korpus_visota_verh[$k] = $m;
}

 foreach ( $_POST['korpus_glubina_verh'] as $k=>$m) {
$korpus_glubina_verh[$k] = $m;
}


 foreach ( $_POST['korpus_comment_verh'] as $k=>$m) {
$korpus_comment_verh[$k] = $m;
}

 foreach ( $_POST['korpus_shirina_niz'] as $k=>$m) {
$korpus_shirina_niz[$k] = $m;
}


 foreach ( $_POST['korpus_visota_niz'] as $k=>$m) {
$korpus_visota_niz[$k] = $m;
}

 foreach ( $_POST['korpus_glubina_niz'] as $k=>$m) {
$korpus_glubina_niz[$k] = $m;
}
 foreach ( $_POST['korpus_comment_niz'] as $k=>$m) {
$korpus_comment_niz[$k] = $m;
}




foreach(array_map(NULL, $korpus_shirina_verh, $korpus_visota_verh, $korpus_glubina_verh,$korpus_comment_verh) as $x)
{
   list($korpus_shirina_verh, $korpus_visota_verh, $korpus_glubina_verh,$korpus_comment_verh) = $x;
  ?>


<tr height="20" style="height:15.0pt">
  <td colspan="3" height="20" class="xl13126699" style="height:15.0pt"><input id="my_inp" name="korpus_shirina_verh[]" value="<?php echo $korpus_shirina_verh; ?>"/></td>
  <td class="xl8526699" style="border-left:none"><input id="my_inp" name="korpus_visota_verh[]" value="<?php echo $korpus_visota_verh; ?>"/></td>
  <td class="xl8526699" style="border-left:none"><input id="my_inp" name="korpus_glubina_verh[]" value="<?php echo $korpus_glubina_verh; ?>"/></td>
  <td colspan="5" class="xl20426699" width="192" style="border-right:.5pt solid black;
  border-left:none;width:145pt"><input id="my_inp" name="korpus_comment_verh[]" value="<?php echo $korpus_comment_verh; ?>"/></td>
 
  <td class="xl8726699" style="border-left:none">&nbsp;</td>
 </tr>


<?php }   ?>




 <tr height="16" style="mso-height-source:userset;height:12.0pt">
  <td colspan="3" height="16" class="xl23126699" style="height:12.0pt">низ</td>
  <td class="xl12426699" style="border-top:none;border-left:none">высота</td>
  <td class="xl12426699" style="border-top:none;border-left:none">глубина</td>
  <td colspan="5" class="xl12426699" style="border-right:1.0pt solid black;
  border-left:none">доп</td>
  <td class="xl11126699" style="border-left:none">ЦЕНА</td>
 </tr>
<?php 
foreach(array_map(NULL, $korpus_shirina_niz, $korpus_visota_niz, $korpus_glubina_niz,$korpus_comment_niz) as $x)
{
   list($korpus_shirina_niz, $korpus_visota_niz, $korpus_glubina_niz,$korpus_comment_niz) = $x;
  ?>
?>
 <tr height="20" style="height:15.0pt">
  <td colspan="3" height="20" class="xl18026699" style="height:15.0pt"><input id="my_inp" name="korpus_shirina_niz[]" value="<?php echo $korpus_shirina_niz; ?>"/></td>
  <td class="xl12226699" style="border-left:none"><input id="my_inp" name="korpus_visota_niz[]" value="<?php echo $korpus_visota_niz; ?>"/></td>
  <td class="xl12226699" style="border-left:none"><input id="my_inp" name="korpus_glubina_niz[]" value="<?php echo $korpus_glubina_niz; ?>"/></td>
 <td colspan="5" class="xl20426699" width="192" style="border-right:.5pt solid black;
  border-left:none;width:145pt"><input id="my_inp" name="korpus_comment_niz[]" value="<?php echo $korpus_comment_niz; ?>"/></td>
  <td class="xl8726699" style="border-left:none">&nbsp;</td>
 </tr>
 <?php  }?>











 <tr class="xl6553526699" height="15" style="mso-height-source:userset;height:11.25pt">
  <td colspan="9" height="15" class="xl22926699" style="border-right:1.0pt solid black;
  height:11.25pt">ДОПОЛНИТЕЛЬНО</td>
  <td class="xl8226699">&nbsp;</td>
  <td class="xl8226699">ЦЕНА</td>
 </tr>
 <tr height="18" id="tr_ruchki" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl17726699" style="height:14.1pt">РУЧКИ</td>
  
  <?php  foreach ( $_POST['ruchki_name'] as $k=>$m) {
$ruchki_name[$k] = $m;
}
foreach ( $_POST['kolvo_ruchek'] as $k=>$m) {
$kolvo_ruchek[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
  <input id="ruchki" name="ruchki" value="<?php foreach(array_map(NULL, $ruchki_name, $kolvo_ruchek) as $x)
{
   list($ruchki_name, $kolvo_ruchek) = $x;
echo $ruchki_name.' '.$kolvo_ruchek.' шт.; '; 

 }?>"/>

  </td>
  <td colspan="1" class="xl17326699">&nbsp;</td>
 </tr>
 <tr height="18" id="tr_nozhki" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">НОЖКИ</td>
 <?php  foreach ( $_POST['nozhki_name'] as $k=>$m) {
$nozhki_name[$k] = $m;
}
foreach ( $_POST['kolvo_nozhek'] as $k=>$m) {
$kolvo_nozhek[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
  <input id="nozhki" name="nozhki" value="<?php foreach(array_map(NULL, $nozhki_name, $kolvo_nozhek) as $x)
{
   list($nozhki_name, $kolvo_nozhki) = $x;
echo $nozhki_name.' '.$kolvo_nozhki.' шт.; '; 

 }?>"/></td>
  <td colspan="1" class="xl17326699">&nbsp;</td>
 </tr>
 <tr id="tr_lotki" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">ЛОТОК</td>
  <?php  foreach ( $_POST['lotki_name'] as $k=>$m) {
$lotki_name[$k] = $m;
}
foreach ( $_POST['kolvo_lotok'] as $k=>$m) {
$kolvo_lotok[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
  <input id="lotki" name="lotki" value="<?php foreach(array_map(NULL, $lotki_name, $kolvo_lotok) as $x)
{
   list($lotki_name, $kolvo_lotok) = $x;
echo $lotki_name.' '.$kolvo_lotok.' шт.; '; 

 }?>"/>
  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_sushka" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">СУШКА</td>
   <?php  foreach ( $_POST['sushki_name'] as $k=>$m) {
$sushki_name[$k] = $m;
}
foreach ( $_POST['kolvo_sushka'] as $k=>$m) {
$kolvo_sushka[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
 <input id="sushka" name="sushka" value="<?php foreach(array_map(NULL, $sushki_name, $kolvo_sushka) as $x)
{
   list($sushki_name, $kolvo_sushka) = $x;
echo $sushki_name.' '.$kolvo_sushka.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_kargo" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">КАРГО</td>
   <?php  foreach ( $_POST['kargo_name'] as $k=>$m) {
$kargo_name[$k] = $m;
}
foreach ( $_POST['kolvo_kargo'] as $k=>$m) {
$kolvo_kargo[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="kargo" name="kargo" value="<?php foreach(array_map(NULL, $kargo_name, $kolvo_kargo) as $x)
{
   list($kargo_name, $kolvo_kargo) = $x;
echo $kargo_name.' '.$sushka_kargo.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_planki" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt"><span style="mso-spacerun:yes">&nbsp;</span>ПЛАНКА ЩЕЛ/ТОРЦЕВАЯ/УГЛОВ</td>
     <?php  foreach ( $_POST['planki_name'] as $k=>$m) {
$planki_name[$k] = $m;
}
foreach ( $_POST['kolvo_planki'] as $k=>$m) {
$kolvo_planki[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="planki" name="planki" value="<?php foreach(array_map(NULL, $planki_name, $kolvo_planki) as $x)
{
   list($planki_name, $kolvo_planki) = $x;
echo $planki_name.' '.$kolvo_planki.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_pod_meh" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">ПОДЪЕМНЫЕ МЕХАНИЗМЫ</td>
      <?php  foreach ( $_POST['pod_meh_name'] as $k=>$m) {
$pod_meh_name[$k] = $m;
}
foreach ( $_POST['kolvo_pod_meh'] as $k=>$m) {
$kolvo_pod_meh[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="pod_meh" name="pod_meh" value="<?php foreach(array_map(NULL, $pod_meh_name, $kolvo_pod_meh) as $x)
{
   list($pod_meh_name, $kolvo_pod_meh) = $x;
echo $pod_meh_name.' '.$kolvo_pod_meh.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_plint" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15326699" style="height:14.1pt">ПЛИНТУС УГОЛОК ЗАГЛУШКА</td>
    <?php
foreach ( $_POST['color_plint'] as $k=>$m) {
$color_plint[$k] = $m;
}


      foreach ( $_POST['add_plint'] as $k=>$m) {
$add_plint[$k] = $m;
}
foreach ( $_POST['kolvo_plint'] as $k=>$m) {
$kolvo_plint[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
  <input id="plint" name="plint" value="<?php foreach(array_map(NULL, $add_plint, $color_plint,$kolvo_plint) as $x)
{
   list($add_plint, $color_plint, $kolvo_plint) = $x;
echo $add_plint.' '.$color_plint.' '.$kolvo_plint.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_petli" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3"  height="18" class="xl15726699" style="height:14.1pt">ПЕТЛИ</td>
     <?php
foreach ( $_POST['petli_name'] as $k=>$m) {
$petli_name[$k] = $m;
}


      foreach ( $_POST['gradus_petli'] as $k=>$m) {
$gradus_petli[$k] = $m;
}
foreach ( $_POST['kolvo_petli'] as $k=>$m) {
$kolvo_petli[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="petli" name="petli" value="<?php foreach(array_map(NULL, $petli_name, $gradus_petli,$kolvo_petli) as $x)
{
   list($petli_name, $gradus_petli, $kolvo_petli) = $x;
echo $petli_name.' Градус:'.$gradus_petli.' Кол-во:'.$kolvo_petli.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 <tr id="tr_metabox" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl20026699" width="322" style="height:14.1pt;
  width:242pt">МЕТАБОКСЫ</td>
     <?php
foreach ( $_POST['metabox_name'] as $k=>$m) {
$metabox_name[$k] = $m;
}


      foreach ( $_POST['kolvo_metabox'] as $k=>$m) {
$kolvo_metabox[$k] = $m;
}
foreach ( $_POST['metabox_comment'] as $k=>$m) {
$metabox_comment[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="metabox" name="metabox" value="<?php foreach(array_map(NULL, $metabox_name, $kolvo_metabox,$metabox_comment) as $x)
{
   list($metabox_name, $kolvo_metabox, $metabox_comment) = $x;
echo $metabox_name.' '.$metabox_comment.' Кол-во:'.$kolvo_metabox.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10026699" style="border-top:none">&nbsp;</td>
 </tr>
 
 <tr id="tr_dop_furn" class="xl6553526699" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">ДОП ФУРНИТУРА</td>
    <?php
foreach ( $_POST['dop_furn_name'] as $k=>$m) {
$dop_furn_name[$k] = $m;
}


      foreach ( $_POST['art_dop_furn'] as $k=>$m) {
$art_dop_furn[$k] = $m;
}
foreach ( $_POST['kolvo_furn'] as $k=>$m) {
$kolvo_furn[$k] = $m;
} ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="dop_furn" name="dop_furn" value="<?php foreach(array_map(NULL, $dop_furn_name, $art_dop_furn,$kolvo_furn) as $x)
{
   list($dop_furn_name, $art_dop_furn, $kolvo_furn) = $x;
echo $dop_furn_name.' Артикул: '.$art_dop_furn.' Кол-во:'.$kolvo_furn.' шт.; '; 

 }?>"/>

  </td>
  <td class="xl10126699">&nbsp;</td>
 </tr>
 <tr id="tr_dop_dsp" class="xl6553526699" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15726699" style="height:14.1pt">ДОП ДСП</td>
     <?php
foreach ( $_POST['shirina_raspil'] as $k=>$m) {
$shirina_raspil[$k] = $m;
}
      foreach ( $_POST['kromka_left'] as $k=>$m) {
$kromka_left[$k] = $m;
}
foreach ( $_POST['visota_raspil'] as $k=>$m) {
$visota_raspil[$k] = $m;
} 

foreach ( $_POST['kromka_right'] as $k=>$m) {
$kromka_right[$k] = $m;
}

foreach ( $_POST['colvo_raspil'] as $k=>$m) {
$colvo_raspil[$k] = $m;
}

foreach ( $_POST['comment_raspil_comment'] as $k=>$m) {
$comment_raspil_comment[$k] = $m;
}



?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="dop_dsp" name="dop_dsp" value="<?php foreach(array_map(NULL, $shirina_raspil, $kromka_left,$visota_raspil, $kromka_right, $colvo_raspil,$comment_raspil_comment) as $x)
{
   list($shirina_raspil, $kromka_left,$visota_raspil, $kromka_right, $colvo_raspil,$comment_raspil_comment) = $x;
echo 'ШИРИНА: '.$shirina_raspil.' Кр.лев.: '.$kromka_left.' Выс.:'.$visota_raspil.' Кр.прав. '.$kromka_right.' кол-во:'.$colvo_raspil.' Комм.'.$comment_raspil_comment.'; </br>'; 

 }?>"/>

  </td>
  <td class="xl10226699">&nbsp;</td>
 </tr>

 <tr id="tr_moiki" class="xl6553526699" height="18" style="mso-height-source:userset;height:14.1pt">
  <td colspan="3" height="18" class="xl15326699" style="height:14.1pt">МОЙКИ</td>
    <?php  foreach ( $_POST['moiki_name'] as $k=>$m) {
$moiki_name[$k] = $m;
}
foreach ( $_POST['kolvo_moiki'] as $k=>$m) {
$kolvo_moiki[$k] = $m;
}

foreach ( $_POST['comment_moiki'] as $k=>$m) {
$comment_moiki[$k] = $m;
}

 ?>
  <td colspan="7" style="white-space: normal;" class="xl17326699">
   <input id="moiki" name="moiki" value="<?php foreach(array_map(NULL, $moiki_name, $kolvo_moiki,$comment_moiki) as $x)
{
   list($moiki_name, $kolvo_moiki,$comment_moiki) = $x;
echo $moiki_name.' '.$kolvo_moiki.' шт.'.$comment_moiki.'; '; 

 }?>"/>

  </td>
  <td class="xl10326699" style="border-left:none">&nbsp;</td>
 </tr>
 
 
 <tr id="tr_bitovyxa" class="xl6553526699" height="15" style="mso-height-source:userset;height:11.25pt">
  <td colspan="3" height="15" class="xl15326699" style="height:11.25pt">БЫТОВАЯ ТЕХНИКА ВЫТЯЖКИ</td>
  <td colspan="7" class="xl13426699"><input id="bitovyxa" name="bitovyxa" value=""/></td>
  <td class="xl10126699">&nbsp;</td>
 </tr>
 <tr id="tr_bitovyxa_teh" class="xl6553526699" height="15" style="mso-height-source:userset;height:11.25pt">
  <td colspan="3" height="15" class="xl19126699" style="height:11.25pt">БЫТОВАЯ ТЕХНИКА</td>
  <td colspan="5" class="xl14826699"><input id="bitovyxa_teh" name="bitovyxa_teh" value=""/></td>
  <td class="xl10126699">&nbsp;</td>
 </tr>
 <tr height="19" style="mso-height-source:userset;height:14.25pt">
  <td colspan="11" height="19" class="xl18826699" style="border:1.0pt solid black;
  height:14.25pt"></td>
  
 
 </tr>
 
 <!--[if supportMisalignedColumns]-->
 <tr height="0" style="display:none">
  <td width="87" style="width:65pt"></td>
  <td width="69" style="width:52pt"></td>
  <td width="166" style="width:125pt"></td>
  <td width="68" style="width:51pt"></td>
  <td width="68" style="width:51pt"></td>
  <td width="86" style="width:65pt"></td>
  <td width="106" style="width:80pt"></td>
  <td width="82" style="width:62pt"></td>
  <td width="97" style="width:73pt"></td>
  <td width="168" style="width:126pt"></td>
  <td width="81" style="width:61pt"></td>
 </tr>
 <!--[endif]-->
</tbody></table>
<input type="submit" name="" value="Отправить">
</form>
</div>


<!----------------------------->
<!--ÊÎÍÅÖ ÔÐÀÃÌÅÍÒÀ ÏÓÁËÈÊÀÖÈÈ ÌÀÑÒÅÐÀ ÂÅÁ-ÑÒÐÀÍÈÖ EXCEL-->
<!----------------------------->



</body></html>
<script>
function preventDefault(){
    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('tabeleee');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');
    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'Монтанья_проект_№' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  };
</script>

<script src="https://bl.ocks.org/Flyer53/raw/1de5a78de9c89850999c/tableToExcel.js"></script>
<button id="btnExport" onclick="preventDefault()" style="background: yellow; border-radius: 0px; color: #1a5b6d; padding: 0px 24px 0px 24px; height: 25px; border: solid 1px blue; margin-top: 20px; float: right;" type="button">Экспортировать в EXCEL</button>

<script>
  function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
  if ($('.stolewnica_osnovn_decor').val() == 'БЕЗ СТОЛЕШНИЦЫ'){

$("tr#stroka_stolewek").css("display","none");
  }

  if ($('.name_osn_stenov').val() == 'Без стеновой'){

$("tr#stroka_stenovoi").css("display","none");
  }


  if ($('#ruchki').val() == ''){

$("#tr_ruchki").css("display","none");
  }

  if ($('#nozhki').val() == ''){

$("#tr_nozhki").css("display","none");
  }

  if ($('#lotki').val() == ''){

$("#tr_lotki").css("display","none");
  }


 if ($('#kargo').val() == ''){

$("#tr_kargo").css("display","none");
  }

 if ($('#sushka').val() == ''){

$("#tr_sushka").css("display","none");
  }

if ($('#planki').val() == ''){

$("#tr_planki").css("display","none");
  }


if ($('#pod_meh').val() == ''){

$("#tr_pod_meh").css("display","none");
  }
  
if ($('#plint').val() == ''){

$("#tr_plint").css("display","none");
  }
  

 if ($('#petli').val() == ''){

$("#tr_petli").css("display","none");
  }
   
   if ($('#metabox').val() == ''){

$("#tr_metabox").css("display","none");
  }

     if ($('#dop_furn').val() == ''){

$("#tr_dop_furn").css("display","none");
  }

       if ($('#dop_dsp').val() == ''){

$("#tr_dop_dsp").css("display","none");
  }

       if ($('#moiki').val() == ''){

$("#tr_moiki").css("display","none");
  }

    if ($('#bitovyxa').val() == ''){

$("#tr_bitovyxa").css("display","none");
  }

if ($('#bitovyxa_teh').val() == ''){

$("#tr_bitovyxa_teh").css("display","none");
  }


</script>