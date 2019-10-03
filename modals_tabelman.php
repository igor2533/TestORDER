<?php  include('blocks/db.php');  ?>

<a href="logout.php">Выход</a>
  <div id="nachalo_karcasy"></div>
<form method="post" style="margin-top: 49px;text-align:center;" action="table_read.php">
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="index3.css">
</head>

<body>
<form method="post" target="_blank" action="table_read.php">
<?php  include('blocks/karcas.php');  ?>
<?php  include('blocks/fasad.php');  ?>
<?php  include('blocks/modules.php');  ?>
<?php  include('blocks/raspil.php');  ?>
<?php  include('blocks/stolewnica.php');  ?>
<?php  include('blocks/stenovaya.php');  ?>
<?php  include('blocks/furnitura/ruchki.php');  ?>
</div>
</br>
<a id="v_nach_bt" href="#nachalo_karcasy">ВЕРНУТЬСЯ К КАРКАСАМ</a>
<input class="add_kusok_stol" type="submit" name="send_forma" value="ПРОВЕРИТЬ И ОТПРАВИТЬ ЗАКАЗ" />
</div>
</div>
</form>
</body>
</html>











<?php include('scripts/part_1.php')  ?>


























