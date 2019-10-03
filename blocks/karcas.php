<div class="block_carcas" style="">
  <div>
<div class="color_carcas_verh">
<span id="add_help" style="border: solid 1px red;margin-left: 27px;padding: 7px;
    font-weight: bold;color: red;position: relative;
    top: 0px;
    right: 28px;"> Выберите верхний каркас → </span> <select required name="karcas_vibor_verh">
    <option selected disabled value=''>Выберите верхний каркас</option>
    <?php include ('materials/carcas.php');  ?>
  </select><select required name="structura_carcas_verh"><option selected disabled value=''>Выберите структуру</option><option>Без структуры</option><option value="horizont">Горизонтальная</option><option value="vertical">Вертикальная</option></select><textarea name="dop_com_verh_carcas" placeholder="Комментарий" id="comment_carc_verh"></textarea>
</div>

<div class="color_carcas_niz">
<span id="add_help" style="border: solid 1px red;margin-left: 27px;padding: 7px;
    font-weight: bold;color: red;position: relative;
    top: 0px;
    right: 28px;"> Выберите нижний каркас → </span>  <select name="karcas_vibor_niz" required>
    <option selected disabled value=''>Выберите нижний каркас</option>
    <?php include ('materials/carcas.php');  ?>
  </select><select required name="structura_carcas_niz"><option selected disabled value=''>Выберите структуру</option><option>Без структуры</option><option value="horizont">Горизонтальная</option><option value="vertical">Вертикальная</option></select><textarea name="dop_com_vniz_carcas" placeholder="Комментарий" id="comment_carc_niz"></textarea>
</div>

<textarea placeholder="Комментарий" name="dop_com_all_carcas" id="komment_obw_karkasov"></textarea>

</div>
<span id="add_help" style="border: solid 1px red;margin-left: 27px;padding: 7px;
    font-weight: bold;color: red;position: relative;
    top: 15px;
    right: 28px;"> Нажать "Далее" для перехода к фасадам → </span><a class="dalee_kn" href="#pereiti_k_fasadam">ДАЛЕЕ</a>
</div>


<div id="pereiti_k_fasadam"></div>