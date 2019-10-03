<script type="text/javascript">





$(document).ready(function(){
    var count = 1;

    $("#add_modul_vverh_new").click(function(){
       $("#ulbolckappend").append("<li class='korpus_verh_class' id='li_korpus_verh_id_" + count +"'><input class='markvka_verh' title='Укажите маркировку! Например 60 вп'     name='korpus_shirina_verh[]' type='text' id='korpus_shirina_id_verh_" + count + "' style='' spellcheck='false' placeholder='Маркировка' /><input title='Укажите высоту' name='korpus_visota_verh[]' type='number' id='korpus_visota_id_verh' value='720' placeholder='ВЫСОТА' /><input title='Укажите глубину' value='300' name='korpus_glubina_verh[]' type='number' id='korpus_glubina_id_verh' placeholder='ГЛУБИНА' /><textarea name='korpus_comment_verh[]' type='text' title='Укажите Комментарий' id='korpus_comment_id_verh' placeholder='Комментарий'/></textarea> <span id='tehotdel'>Тех.отдел</span> <input name='checkbox[]' title='Галочка ставится, если разрабатываются доп. карты для создании шкафчика' type='checkbox' id='korpus_checkbox_id_verh'/><a id='delete_mod_verh' onclick='$(\""+"#li_korpus_verh_id_"+ count +"\").remove();'>X</a></li>");
    var otherValue = $('#korpus_verh_id').val();
       $('#korpus_shirina_id_verh_'+count+'').val(otherValue);
      count++;
    });
})










$(document).ready(function(){
    var count = 1;

    $("#add_modul_niz_new").click(function(){
       $("#ulbolckappend_niz").append("<li class='korpus_niz_class' id='li_korpus_niz_id_" + count +"'><input class='markvka_verh' title='Укажите маркировку! Например 60 вп'     name='korpus_shirina_niz[]' type='text' id='korpus_shirina_id_niz_" + count + "' style='' spellcheck='false' placeholder='Маркировка' /><input title='Укажите высоту' name='korpus_visota_niz[]' type='number' id='korpus_visota_id_niz' value='720' placeholder='ВЫСОТА' /><input title='Укажите глубину' value='530' name='korpus_glubina_niz[]' type='number' id='korpus_glubina_id_niz' placeholder='ГЛУБИНА' /><textarea name='korpus_comment_niz[]' type='text' title='Укажите Комментарий' id='korpus_comment_id_niz' placeholder='Комментарий'/></textarea> <span id='tehotdel'>Тех.отдел</span> <input name='checkbox[]' title='Галочка ставится, если разрабатываются доп. карты для создании шкафчика' type='checkbox' id='korpus_checkbox_id_niz'/><a id='delete_mod_niz' onclick='$(\""+"#li_korpus_niz_id_"+ count +"\").remove();'>X</a></li>");
       var otherValue = $('#korpus_niz_id').val();
       $('#korpus_shirina_id_niz_'+count+'').val(otherValue);
       count++;
    });
})



$(document).ready(function(){
    var count = 1;

    $("#add_raspilo_id").click(function(){
     $('#ul_raspilo').append("<li id='li_type_raspil_id_" + count +"' class='li_type_raspil_class'><input name='shirina_raspil[]' type='number' id='shirina_raspil_id' placeholder='ШИРИНА' /><select name='kromka_left[]'><option value=''>Кромление</option><option>БЕЗ</option><option value='|'>/</option><option value='||'>//</option></select><input name='visota_raspil[]' type='number' id='visota_raspil_id' placeholder='ВЫСОТА' /><select name='kromka_right[]'><option value=''>Кромление</option><option>БЕЗ</option><option value='|'>/</option><option value='||'>//</option></select><input type='number' id='colvo_raspil_id' name='colvo_raspil[]' placeholder='Кол-во'><textarea name='comment_raspil_comment[]' type='text' id='comment_raspil_id' placeholder='Комментарий' /></textarea><a id='delete_razpil' onclick='$(\""+"#li_type_raspil_id_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})







$(document).ready(function(){
    var count = 1;

    $("#add_stolewnica").click(function(){
    $('#ul_stolewnica').append("<li class='li_type_mat_stol_class' id='li_type_mat_stol_" + count +"'><select name='decor_kromka_stol[]'><option value='' selected>Выберите кромку</option><?php include('materials/kromki_stol.php'); ?></select><select name='name_zaval_stol[]'><option value=''>Завал</option><option>Без завала</option><option>С завалом</option></select><select name='oper_stol_left[]'><option value=''>Операция <<<</option><?php include('materials/operations_stol.php');?></select><select name='oper_stol_right[]'><option value=''>Операция >>></option><?php include('materials/operations_stol.php');?></select><input type='number' id='shir_kus_stol' name='' hidden placeholder='Толщина'><input type='number' id='dlina_kus_stol' name='dlina_kus_stol[]' placeholder='Длина'><input type='number' name='glubina_kusk_stol[]' id='glubina_kusk_stol' placeholder='Глубина'><select name='stol_decor[]'><option selected value=''>Столешница по умолчанию</option><?php include('materials/stolewnica.php'); ?></select><a id='delete_razpil' onclick='$(\""+"#li_type_mat_stol_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})






$(document).ready(function(){
    var count = 1;

    $("#add_sten_id").click(function(){
    $('#ul_stenovaya').append("<li class='li_class_stenov' id='li_type_stenov_id_" + count +"'><select name='okleika_stenov[]'><option value=''>Оклейка</option><option>Без  оклейки</option><option>В цвет</option></select><select name='operations_stenov[]'><option value=''>Операция</option><?php include('materials/operations_stol.php');?></select><input type='number' id='dlina_stenovoi' placeholder='Длина' name='dlina_stenovoi[]'><input type='number' name='visota_stenovoi[]' id='visota_stenovoi' placeholder='ВЫСОТА'><select name='panel_stenov[]'><option value='' selected>Панель по умолчанию</option><?php include('materials/stenovaya.php'); ?></select><a id='delete_razpil' onclick='$(\""+"#li_type_stenov_id_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})










$(document).ready(function(){
    var count = 1;

    $("#add_ruchki").click(function(){
    $('#ul_ruchki').append("<li class='li_class_stenov' id='li_ruchki_" + count +"'><select name='ruchki_name[]'><option selected>Выберите ручку</option><?php include('materials/furnitura/ruchki.php'); ?></select><input type='number' name='kolvo_ruchek[]' id='kolvo_ruchek' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_ruchki_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})


$(document).ready(function(){
    var count = 1;

    $("#add_nozhki").click(function(){
    $('#ul_nozhki').append("<li class='li_class_stenov' id='li_nozhki_" + count +"'><select name='nozhki_name[]'><option selected>Выберите ножку</option><?php include('materials/furnitura/nozhki.php'); ?></select><input type='number' name='kolvo_nozhek[]' id='kolvo_nozhek' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_nozhki_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})




$(document).ready(function(){
    var count = 1;

    $("#add_lotok").click(function(){
    $('#ul_lotok').append("<li class='li_class_stenov' id='li_lotok_" + count +"'><select name='lotki_name[]'><option selected>Выберите лоток</option><?php include('materials/furnitura/lotok.php'); ?></select><input type='number' name='kolvo_lotok[]' id='kolvo_lotok' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_lotok_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})



$(document).ready(function(){
    var count = 1;

    $("#add_sushka").click(function(){
    $('#ul_sushka').append("<li class='li_class_stenov' id='li_sushka_" + count +"'><select name='sushki_name[]'><option selected>Выберите сушку</option><?php include('materials/furnitura/sushka.php'); ?></select><input type='number' name='kolvo_sushka[]' id='kolvo_sushka' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_sushka_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})


$(document).ready(function(){
    var count = 1;

    $("#add_kargo").click(function(){
    $('#ul_kargo').append("<li class='li_class_stenov' id='li_kargo_" + count +"'><select name='kargo_name[]'><option selected>Выберите карго</option><?php include('materials/furnitura/kargo.php'); ?></select><input type='number' name='kolvo_kargo[]' id='kolvo_kargo' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_kargo_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})




$(document).ready(function(){
    var count = 1;

    $("#add_planki").click(function(){
    $('#ul_planki').append("<li class='li_class_stenov' id='li_planki_" + count +"'><select name='planki_name[]'><option selected>Выберите планку</option><?php include('materials/furnitura/planki.php'); ?></select><input type='number' name='kolvo_planki[]' id='kolvo_planki' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_planki_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})




$(document).ready(function(){
    var count = 1;

    $("#add_pod_meh").click(function(){
    $('#ul_pod_meh').append("<li class='li_class_stenov' id='li_pod_meh_" + count +"'><select name='pod_meh_name[]'><option selected>Выберите механизм</option><?php include('materials/furnitura/pod_meh.php'); ?></select><input type='number' name='kolvo_pod_meh[]' id='kolvo_pod_meh' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_pod_meh_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})



$(document).ready(function(){
    var count = 1;

    $("#add_plint").click(function(){
    $('#ul_plint').append("<li class='li_class_stenov' id='li_plint_" + count +"'><select name='add_plint[]'><option selected>Выберите элемент</option><?php include('materials/furnitura/plint.php'); ?></select><input name='color_plint[]' type='text' placeholder='Цвет' /><input type='number' name='kolvo_plint[]' id='kolvo_plint' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_plint_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})


$(document).ready(function(){
    var count = 1;

    $("#add_petli").click(function(){
    $('#ul_petli').append("<li class='li_class_stenov' id='li_petli_" + count +"'><select name='petli_name[]'><option selected>Выберите петли</option><?php include('materials/furnitura/petli.php'); ?></select><input placeholder='Градус' name='gradus_petli[]' type='number' /><input type='number' name='kolvo_petli[]' id='kolvo_petli' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_petli_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})

$(document).ready(function(){
    var count = 1;

    $("#add_metabox").click(function(){
    $('#ul_metabox').append("<li class='li_class_stenov' id='li_metabox_" + count +"'><select name='metabox_name[]'><option selected>Выберите систему выдвижения для ящиков</option><?php include('materials/furnitura/metabox.php'); ?></select><input type='number' name='kolvo_metabox[]' id='kolvo_metabox' placeholder='Кол-во'><textarea name='metabox_comment[]' type='text' title='Укажите комментарий' id='korpus_comment_id_verh' placeholder='Комментарий'/></textarea> <a id='delete_razpil' onclick='$(\""+"#li_metabox_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})




$(document).ready(function(){
    var count = 1;

    $("#add_moiki").click(function(){
    $('#ul_moiki').append("<li class='li_class_stenov' id='li_moiki_" + count +"'><select name='moiki_name[]'><option selected>Выберите мойки</option><?php include('materials/furnitura/moiki.php'); ?></select><input type='number' name='kolvo_moiki[]' id='kolvo_moiki' placeholder='Кол-во'><textarea name='comment_moiki[]' type='text' title='Укажите комментарий' id='korpus_comment_id_verh' placeholder='Комментарий'/></textarea> <a id='delete_razpil' onclick='$(\""+"#li_moiki_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})



$(document).ready(function(){
    var count = 1;

    $("#add_furn").click(function(){
    $('#ul_furn').append("<li class='li_class_stenov' id='li_furn_" + count +"'><input name='dop_furn_name[]' style='width: 450px;'  placeholder='Название'/><input name='art_dop_furn[]'  placeholder='Артикул'/> <inpu/><input type='number' name='kolvo_furn[]' id='kolvo_furn' placeholder='Кол-во'><a id='delete_razpil' onclick='$(\""+"#li_furn_"+ count +"\").remove();'>X</a></li>");
   
       count++;
    });
})








$( "#select_id_verh_fasad" ).change(function() {
  
    if($('#select_id_verh_fasad').val()== 'hpl'){$('#fasad_verh_id').html("<?php include('materials/fasades/hpl.php'); ?>");
    $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
   /* заперт кромки */
   if($('#select_id_verh_fasad').val()== 'plastic'){$('#fasad_verh_id').html("<?php include('materials/fasades/plastic.php'); ?>");
/* enable kromka */
  $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
   
if($('#select_id_verh_fasad').val()== 'brilliant'){$('#fasad_verh_id').html("<?php include('materials/fasades/brilliant.php'); ?>");
$('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
if($('#select_id_verh_fasad').val()== 'fenix'){$('#fasad_verh_id').html("<?php include('materials/fasades/fenix.php'); ?>");
 /* enable kromka */
 $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
if($('#select_id_verh_fasad').val()== 'egger'){$('#fasad_verh_id').html("<?php include('materials/fasades/egger.php'); ?>");
 /*enable kromka */
 $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
if($('#select_id_verh_fasad').val()== 'alvic'){$('#fasad_verh_id').html("<?php include('materials/fasades/alvic.php'); ?>");
 /* enable kromka */
 $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);
}
if($('#select_id_verh_fasad').val()== 'syncron'){$('#fasad_verh_id').html("<?php include('materials/fasades/syncron.php'); ?>");
/* enable kromka */
 $('#kromka_verh_id_sel').prop('hidden',false);$('#kromka_verh_id_inp').prop('hidden',false);}
});




$( "#select_id_niz_fasad" ).change(function() {
  
    if($('#select_id_niz_fasad').val()== 'hpl'){$('#fasad_niz_id').html("<?php include('materials/fasades/hpl.php'); ?>");
/* enable kromka */
   $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_niz_id_inp').prop('hidden',false);}
   /* enable kromka */
   if($('#select_id_niz_fasad').val()== 'plastic'){$('#fasad_niz_id').html("<?php include('materials/fasades/plastic.php'); ?>");
/* enable kromka */
  $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_niz_id_inp').prop('hidden',false);}
   /* enable kromka */
if($('#select_id_niz_fasad').val()== 'brilliant'){$('#fasad_niz_id').html("<?php include('materials/fasades/brilliant.php'); ?>");
/* disable kromka */
 $('#kromka_niz_id_sel').prop('hidden',true);$('#kromka_niz_id_inp').prop('hidden',true);}
if($('#select_id_niz_fasad').val()== 'fenix'){$('#fasad_niz_id').html("<?php include('materials/fasades/fenix.php'); ?>");}
/* enable kromka */
 $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_niz_id_inp').prop('hidden',false);
if($('#select_id_niz_fasad').val()== 'egger'){$('#fasad_niz_id').html("<?php include('materials/fasades/egger.php'); ?>");
/* enable kromka */
 $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_vniz_id_inp').prop('hidden',false);}
if($('#select_id_niz_fasad').val()== 'alvic'){$('#fasad_niz_id').html("<?php include('materials/fasades/alvic.php'); ?>");
/* enable kromka */
 $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_niz_id_inp').prop('hidden',false);}
if($('#select_id_niz_fasad').val()== 'syncron'){$('#fasad_niz_id').html("<?php include('materials/fasades/syncron.php'); ?>");
/* enable kromka */
 $('#kromka_niz_id_sel').prop('hidden',false);$('#kromka_niz_id_inp').prop('hidden',false);}



























});















</script>

