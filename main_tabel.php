<? include('session.php')?>
<? include('links.php'); ?>
<? include('db.php'); ?>



<style type="text/css">
  ul#ul_my>li {
    width: auto;
    float: left;
    margin-left: 12px;
}

ul#ul_my {
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0px;
    margin-bottom: 0px;    margin-left: 100px;
}

ul#ul_my>li>a {
    color: white;
    text-decoration: none;
    font-weight: bold;    font-variant-caps: all-petite-caps;
}

ul#ul_my>li>a:hover {
    color: yellow;
}

select>option:disabled {
    color: #F44336!important;
    font-weight: bold;
}
</style>



<li style="    z-index: 22222;  padding-bottom: 20px;height: 80px;  list-style-type: square;
    background: #03A9F4;color:transparent;
    margin-bottom: 10px;
    padding: 7px;
    position: fixed;
    width: 100%;
    top: 0;
    /* margin-right: 2px; */
    left: 0;"> 	<!-- выйти -->
	<?php     
       if (empty($_SESSION['login']) or empty($_SESSION['id'])){ 
           
       } 
       else{ ?>


<ul id="ul_my">
<li><a href="#nachalo_karcasy">Каркасы</a></li>
<li><a href="#pereiti_k_fasadam">Фасады</a></li>
<li><a href="#modules_pereiti">Модуля</a></li>
<li><a href="#pereiti_k_raspilu">Распил</a></li>
<li><a href="#pereiti_k_stenovoi">Стеновая</a></li></br>
<li><span style="color: #FFEB3B;">Фурнитура →</span></li>
<li><a href="#pereiti_ruchki">Ручки</a></li>
<li><a href="#per_nozhki">Ножки</a></li>
<li><a href="#per_lotki">Лотки</a></li>
<li><a href="#per_sushki">Сушки</a></li>
<li><a href="#per_kargo">Карго</a></li>
<li><a href="#per_planki">Планки</a></li></br>
<li><span style="color: #FFEB3B;">Фурнитура →</span></li>
<li><a href="#per_pod_meg">Под.механизмы</a></li>
<li><a href="#per_plint">Плитсус</a></li>
<li><a href="#per_petli">Петли</a></li>
<li><a href="#per_metabox">СВДЯ</a></li>
<li><a href="#per_moiki">Мойки</a></li>
<li><a href="#per_furn_dop">Доп.фурнитура</a></li>
</ul>




       <?php
        	
       echo '<a class="vihodh" style=" display:none; color: white;
    font-weight: bold;
    text-decoration: none;
    background: #03A9F4;
    padding: 3px;" href=exit.php>Выйти</a>';
	    echo '<a href="exit.php" title="Это ваш логин" style="    background: #FF5722;
    padding-left: 5px;
    float: right;
    color: #ffffff;
    margin-right: 15px;
    text-decoration: none;
    font-size: 20px;
    margin-top: -30px;
    padding-right: 5px;
    padding-top: 4px;
    padding-bottom: 4px;">';
echo $login_in_system.' / ВЫХОД';

	   
	   
	   
	   
	   } 
       ?>
	<!-- выйти конец --> </li>







<?php     
       if (($level_users=='1')){ 
         include('modals_admin.php');
		
	
       } 
	   
	   if (($level_users=='3')){ 
         include('modals_otiz.php');
		 
       } 
	   
	    if (($level_users=='2')){ 



$sql_tab_obn = $db->query("SELECT * FROM levels where id = 5");
 $db->close;
 while($resulte = $sql_tab_obn->fetch_assoc()): 
$tabel_obnovlen_date = $resulte['nazv'];
endwhile;


      // echo '<a style="position: absolute;color: white;font-size:28px;margin-left:38px;">Табель обновлен '.$tabel_obnovlen_date.'</a>';


        include('modals_tabelman.php');
		//include('chat/index.php');
       } 
	   
	   
	   
       else{  

	   } 
       ?>




















	   



