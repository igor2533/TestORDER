
<div id="block_fasadov" style="padding: 10px;">

  <div>

  <div>

    <ul>
<h1>Фасады верх</h1></br>
      <li id="li_type_fasad_id_verh"><select required id="select_id_verh_fasad" name="fasad_material_verh"><option selected disabled value=''>Выберите материал</option><?php include('materials/cat_fasad.php');?></select><select required id="fasad_verh_id" name="fasad_dekor_verh"><option selected disabled value=''>Выберите декор</option></select><select required id="kromka_verh_id_sel" name="kromka_fasad_verh"><option selected disabled value=''>Выберите кромку</option><?php include('materials/kromki.php'); ?></select><select required name="structura_fasad_verh" id="structura_id_verh_fas"><option selected disabled value=''>Выберите структуру</option><option>Без структуры</option><option value="horizont">Горизонтальная</option><option value="vertical">Вертикальная</option></select><textarea id="komment_fasad_id_verh" type="text" placeholder="Комментарий" name="dop_comment_fasad_verh_verh"/></textarea></li>

<h1>ФАСАДЫ НИЗ</h1></br>
  <li id="li_type_fasad_id_niz"><select required id="select_id_niz_fasad" name="fasad_material_niz"><option selected disabled value=''>Выберите материал</option><?php include('materials/cat_fasad.php');?></select><select required id="fasad_niz_id" name="fasad_dekor_niz"><option selected disabled value=''>Выберите декор</option></select><select required id="kromka_niz_id_sel" name="kromka_fasad_niz"><option selected disabled value=''>Выберите кромку</option><?php include('materials/kromki.php'); ?></select><select id="structura_id_niz_fas" required name="structura_fasad_niz"><option selected disabled value=''>Выберите структуру</option><option>Без структуры</option><option value="horizont">Горизонтальная</option><option value="vertical">Вертикальная</option></select><textarea id="komment_fasad_id_niz" type="text" placeholder="Комментарий" name="dop_comment_fasad_niz_niz"/></textarea></li>

</br>
<textarea placeholder="Комментарий" name="obw_komment_na_vse_fas_name" id="fasady_obw_id"></textarea>







    </ul>
  </div></div>
  <a class="dalee_kn" href="#modules_pereiti">ДАЛЕЕ</a>
</div>