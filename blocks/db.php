<style>
TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
    background: #b0e0e6; /* Цвет фона */
   }

</style>

<?php 




$sdd_db_host='localhost'; // ваш хост
$sdd_db_name='host1024_tabele'; // ваша бд
$sdd_db_user='host1024_tabele'; // пользователь бд
$sdd_db_pass='hh4*77hjHHHu78'; // пароль к бд
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
@mysql_select_db($sdd_db_name);



//die($_SESSION['login']);






//$name_table = 'Лайт_готовность_заказов_ЛАЙТ_АПРЕЛЬ_1_НЕДЕЛЯ';
?>
