<div id="modules_pereiti"></div>
<div id="modules_blocks">


<div id="modul_block_verh" style="padding: 10px;">

  <h1>Модули верх</h1></br>
  <div>
<span id="label_select_modul">Выберите модуль</span>
<select onchange="document.getElementById('korpus_shirina_id_verh').value=value" title="Выберите модуль" name="korpus_verh[]" id="korpus_verh_id"><?php include('materials/verh.php');?></select>


<a id="add_modul_vverh_new" class="add_kusok_stol"">+</a><span id="add_help" style="border: solid 1px red;margin-left: 27px;padding: 7px;
    font-weight: bold;color: red;"> ← Нажать + для добавления</span>
   </br><span style="font-size: 20px;
    float: left;
    text-align: center;
    width: 100%;
    margin-top: 22px;
    font-weight: bold;"> Список модулей:</span>
    <ul id="ulbolckappend"></ul></div>

</div>

<div id="modul_block_niz" style="padding: 10px;">

  <h1>Модули низ</h1></br>
  <div>

   <span id="label_select_modul">Выберите модуль</span> <select onchange='' title='Выберите модуль' name='korpus_niz[]' id='korpus_niz_id'><?php include('materials/niz.php');?></select>
<a id="add_modul_niz_new" class="add_kusok_stol"">+</a><span id="add_help" style="border: solid 1px red;margin-left: 27px;padding: 7px;
    font-weight: bold;color: red;"> ← Нажать + для добавления</span>
</br><span style="font-size: 20px;
    float: left;
    text-align: center;
    width: 100%;
    margin-top: 22px;
    font-weight: bold;"> Список модулей:</span>
    <ul id="ulbolckappend_niz"></ul></div>


<h1 style="display: none;">Ящики</h1></br>
  <div style="display: none;">
<span id="add_text_c">Добавить яшик</span> <a class="add_kusok_stol" onclick="add_modul_yawik();">+</a>
    <ul><li id="li_korpus_yawik_id"><select name="korpus_yawik[]" id="korpus_yawik_id"><option value="">Модуль</option><option value="ШСЯ">ШСЯ</option></select><select name="korpus_yawik_type[]" id="korpus_yawik_type_id"><option value="">ТИП</option><option value="Выпуклый">Выпуклый</option><option value="Невыпуклый">Невыпуклый</option></select><input name="korpus_shirina_yawik[]" type="text" id="korpus_shirina_id_yawik" placeholder="Маркировка" /><input name="korpus_visota_yawik[]" type="number" id="korpus_visota_id_yawik" value="720" placeholder="ВЫСОТА" /><input value="300" name="korpus_glubina_yawik[]" type="number" id="korpus_glubina_id_yawik" placeholder="ГЛУБИНА" /><input name="korpus_kolvo_yawik[]" type="number" id="korpus_kolbo_id_yawik" placeholder="Кол-во ящиков" /><textarea name="korpus_yawik_razmery_verh[]" type="text" id="korpus_razmery_id_yawik" placeholder="Размеры и фасады"/></textarea> <span id="tehotdel">Тех.отдел</span> <input name="checkbox[]" type="checkbox" id="korpus_checkbox_id_verh"  /></li></ul></div>




</div>














</div>
