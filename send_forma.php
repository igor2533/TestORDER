<?php  
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




}
?>
<table>
<tr>
<h1>Каркасы</h1></br>
<td>ВЕРХ: <?php echo $karcas_vibor_verh;  ?></td> <td> ДОП.КОМ: <?php echo $dop_com_verh_carcas;  ?></td>
<td>НИЗ: <?php echo $karcas_vibor_niz;  ?></td><td> ДОП.КОМ: <?php echo $dop_com_niz_carcas;  ?></td>
</tr>
<h2>Доп.ком. для всех каркасов:</h2></br>
<?php  echo $dop_com_all_carcas; ?>

 <h1>Фасады:</h1>
ВЕРХ:<?php echo $fasad_material_verh;  ?> ДЕКОР: <?php echo $fasad_dekor_verh;  ?> Кромка: <?php echo $kromka_fasad_verh;  ?> доп.ком. <?php echo $dop_comment_fasad_verh_verh  ?> </br>
НИЗ:<?php echo $fasad_material_niz;  ?> ДЕКОР: <?php echo $fasad_dekor_niz;  ?> Кромка: <?php echo $kromka_fasad_niz;  ?> доп.ком. <?php echo $dop_comment_fasad_niz_niz  ?> </br>
<h2>Доп.ком. для всех фасадов:</h2>
<?php echo $obw_komment_na_vse_fas_name;  ?>

</table>
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

?>

<h1>Модули вверх</h1></br>
<?php

echo $korpus_shirina_verh[0]." ВЫСОТА:".$korpus_visota_verh[0]." мм. Глубина: ".$korpus_glubina_verh[0]." мм.</br>";
echo $korpus_shirina_verh[1]." ВЫСОТА:".$korpus_visota_verh[1]." мм. Глубина: ".$korpus_glubina_verh[1]." мм.</br>";
echo $korpus_shirina_verh[2]." ВЫСОТА:".$korpus_visota_verh[2]." мм. Глубина: ".$korpus_glubina_verh[2]." мм.</br>";
echo $korpus_shirina_verh[3]." ВЫСОТА:".$korpus_visota_verh[3]." мм. Глубина: ".$korpus_glubina_verh[3]." мм.</br>";
echo $korpus_shirina_verh[4]." ВЫСОТА:".$korpus_visota_verh[4]." мм. Глубина: ".$korpus_glubina_verh[4]." мм.</br>";
echo $korpus_shirina_verh[5]." ВЫСОТА:".$korpus_visota_verh[5]." мм. Глубина: ".$korpus_glubina_verh[5]." мм.</br>";
echo $korpus_shirina_verh[6]." ВЫСОТА:".$korpus_visota_verh[6]." мм. Глубина: ".$korpus_glubina_verh[6]." мм.</br>";






?>
