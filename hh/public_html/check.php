<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 if($_POST["name"] == "")
   echo "Введите имя. <a href='/'>Исправить</a>";
 else
   header("Location:index.php");
?>